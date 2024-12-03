<template>
    <div class="text-white">
        <div class="flex flex-col justify-between relative">
            <div class="max-w-2xl mx-auto mt-10 p-6 bg-white/10 rounded-lg shadow-md">
                <h1 class="text-3xl font-semibold mb-6 text-center text-white">
                    Contact Us
                </h1>

                <form @submit.prevent="submitForm" class="space-y-4">
                    <div class="flex flex-col">
                        <label class="text-white font-medium mb-1" for="name">Name</label>
                        <input v-model="form.name" type="text" id="name"
                            class="form-input bg-white/5 border border-white/20 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-amber-400" />
                    </div>
                    <div class="flex flex-col">
                        <label class="text-white font-medium mb-1" for="email">Email</label>
                        <input v-model="form.email" type="email" id="email"
                            class="form-input bg-white/5 border border-white/20 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-amber-400" />
                    </div>
                    <div class="flex flex-col">
                        <label class="text-white font-medium mb-1" for="phone">Phone</label>
                        <input v-model="form.phone" type="text" id="phone"
                            class="form-input bg-white/5 border border-white/20 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-amber-400" />
                    </div>
                    <div class="flex flex-col">
                        <label class="text-white font-medium mb-1" for="message">Message</label>
                        <textarea v-model="form.message" id="message"
                            class="form-input bg-white/5 border border-white/20 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-amber-400"></textarea>
                    </div>
                    <div class="text-center mt-6">
                        <button type="submit"
                            class="w-full sm:w-auto bg-amber-400 text-white font-semibold py-2 px-4 rounded-lg hover:bg-amber-500 focus:outline-none focus:ring-2 focus:ring-amber-400 focus:ring-opacity-50">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import { ref } from 'vue';

export default {
    setup() {
        const form = ref({ name: '', email: '', phone: '', message: '' });

        const submitForm = async () => {
            try {
                const response = await axios.post('/contact', form.value);
                form.value = { name: '', email: '', phone: '', message: '' };
                alert(response.data.message); 
            } catch (error) {
                if (error.response && error.response.status === 422) {
                    const validationErrors = error.response.data.errors;
                    console.error('Validation Errors:', validationErrors);
                    alert('Error: ' + JSON.stringify(validationErrors));
                } else {
                    // Handle unexpected errors
                    console.error('Unexpected Error:', error);
                    alert('An unexpected error occurred. Please try again.');
                }
            }
        };
        return { form, submitForm };
    },
};
</script>
