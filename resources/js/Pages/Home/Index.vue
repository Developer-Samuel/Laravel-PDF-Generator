<template>
    <div class="content w-full h-screen bg-black">
        <div class="container relative md:w-[750px] text-white text-center w-full md:px-0 px-2 mx-auto py-8">
            <h2 class="text-4xl font-bold">User Information</h2>
            <div class="text-lg mt-12">
                <div v-if="data">
                    <p><strong>Name:</strong> {{ data.name }}</p>
                    <p><strong>Email:</strong> {{ data.email }}</p>
                    <p><strong>Phone:</strong> {{ data.phone }}</p>
                    <p><strong>Address:</strong> {{ data.address }}</p>
                    <p><strong>Birthdate:</strong> {{ data.birthdate }}</p>
                    <p><strong>Gender:</strong> {{ data.gender }}</p>
                </div>
                <div v-else>
                    <p class="text-center">Loading data...</p>
                </div>
            </div>
        </div>

        <div class="relative flex justify-center mt-8">
            <button @click="generatePDF" class="bg-green-500 hover:bg-green-600 border-0 rounded-full text-black text-2xl font-bold px-4 py-1.5 transition-linear duration-300">Generate PDF</button>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'Home',
  data() {
    return {
      data: null,
    };
  },
  mounted() {
    this.fetchData();
  },
  methods: {
    fetchData() {
      axios.get('/api')
        .then((response) => {
          this.data = response.data;
        })
        .catch((error) => {
          console.error('Error fetching data:', error);
        });
    },
    generatePDF() {
      axios.get('/pdf/generate', { responseType: 'blob' })
        .then((response) => {
          if (response.status === 200) {
            const link = document.createElement('a');
            link.href = URL.createObjectURL(response.data);
            link.download = 'invoice.pdf';
            link.click();
          } else {
            alert('Failed to generate PDF.');
          }
        })
        .catch((error) => {
          console.error('Error generating PDF:', error);
          alert('An error occurred while generating the PDF.');
        });
    }
  }
};
</script>
