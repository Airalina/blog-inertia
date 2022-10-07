<template>
  <app-layout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Módulo de Notas
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="md:grid md:grid-cols-3 md:gap-6">
          <div class="md:col-span-1">
            <div class="px-4 sm:px0">
              <h3 class="text-lg text-gray-900">Crear una nota</h3>
              <p class="text-sm text-gray-600">
                Crear nueva nota nueva
              </p>
            </div>
          </div>
          <div class="md:col-span-2 mt-5 md:mt-0">
            <div class="shadow bg-white md:rounded-md p-4">
              <form @submit.prevent="submit">
                <label class="block font-medium text-sm text-gray-700">
                  Resumen
                </label>
                <textarea
                  class="form-input w-full rounded-md shadow-sm"
                  v-model="form.description"
                ></textarea>
                
                <button
                  class="
                    bg-blue-500
                    hover:bg-blue-700
                    text-white
                    font-bold
                    py-2
                    px-4
                    rounded-md
                  "
                >
                  Guardar
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from "@inertiajs/inertia-vue3";

export default defineComponent({
  components: {
    AppLayout,
    Link,
  },
  data() {
    return {
      form: {
        description: '',
      },
    };
  },
  methods: {
      submit() {
          this.$inertia.post(this.route('notes.store'), this.form)
      }
  }
});
</script>
