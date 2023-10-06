<script setup>
import { Head, useForm, Link } from '@inertiajs/vue3';
import { reactive } from "vue";
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
defineProps(['tests']);
let form = reactive({
      typeTest1: ' ',
      testMoyenne: ' ',
      studentStatut: ' ',
      studentSelect: ' ',
});

let moyenne = () => {

}

</script>

<template>
      <h1 class="bg-amber-400 py-4  text-center text-2xl  font-semibold">Test Collectif </h1>


      <div class="p-8 -mr-6 -mb-8">
            <form>
                  <fieldset>
                        <div>
                              <h2 class="bg-amber-100 py-2 px-3 rounded  text-start  text-xl  font-semibold  m-x-3 ">
                                    Test d'Acceptation d'objectifs inviduels
                              </h2>
                              <InputLabel for="typeTest">Note:</InputLabel>
                              <TextInput type="number" id="typeTest" name="test1" class="pr-6 pb-8 w-full lg:w-1/2 mb-5"  v-model="testValue1"/>
                        </div>
                        <div>
                              <h2 class="bg-amber-100 py-2 px-3 rounded  text-start  text-xl  font-semibold  m-x-3 ">
                                    Test de Force de proposition dans le débat
                              </h2>
                              <InputLabel for="typeTest">Note:</InputLabel>
                              <TextInput type="number" id="typeTest" name="test2" class="pr-6 pb-8 w-full lg:w-1/2 mb-5"  v-model="testValue2"/>
                        </div>
                        <div>
                              <h2 class="bg-amber-100 py-2 px-3 rounded  text-start  text-xl  font-semibold  m-x-3 ">
                                    Test d'Adaptatibilité
                              </h2>
                              <InputLabel for="typeTest">Note:</InputLabel>
                              <TextInput type="number" id="typeTest" name="test3" class="pr-6 pb-8 w-full lg:w-1/2 mb-5"  v-model="testValue3"/>
                        </div>
                        <div>
                              <h2 class="bg-amber-100 py-2 px-3 rounded  text-start  text-xl  font-semibold  m-x-3 ">
                                    Test d'Inscription dans un dialogue
                              </h2>
                              <InputLabel for="typeTest">Note:</InputLabel>
                              <TextInput type="number" id="typeTest" name="test4" class="pr-6 pb-8 w-full lg:w-1/2 mb-5"  v-model="testValue4"/>
                        </div>
                        <div>
                              <h2 class="bg-amber-100 py-2 px-3 rounded  text-start  text-xl  font-semibold  m-x-3 ">
                                    Test de Contre argumentation
                              </h2>
                              <InputLabel for="typeTest">Note:</InputLabel>
                              <TextInput type="number" id="typeTest" name="test5" class="pr-6 pb-8 w-full lg:w-1/2 mb-5"  v-model="testValue5"/>
                              <div>
                                    <InputLabel>Moyenne:</InputLabel>
                                    <TextInput type="text" bind:value={$from.testMoyenne}
                                          class="pr-6 pb-8 w-full lg:w-1/2 mb-5"  v-model="testValue6"/>
                              </div>
                        </div> <br>
                        <div>
                              <InputLabel>Statut:</InputLabel>
                              <TextInput type="text" bind:value={$from.studentStatut}
                                    class="pr-6 pb-8 w-full lg:w-1/2 mb-5"  v-model="testValue7"/>
                        </div>
                        <div>
                              <InputLabel>Session:</InputLabel>
                              <select type="text" bind:value={$from.studentSelect}
                                    class="rounded-lg border-slate-400 pr-6 pb-8 w-full lg:w-1/2 mb-5" v-model="testValue8">
                                    <option value={null} />
                                    <option value="CA">26-04-2023</option>
                                    <option value="US">11-03-2023</option>
                              </select>
                        </div> <br>
                        <button type="submit" herf="/"
                              class="bg-amber-400 hover:bg-amber-500 px-5 py-3 rounded-lg text-slate-100 mb-6">Sauvagarder</button>
                  </fieldset>
            </form>
      </div>







      <div>

            <h1 class="bg-amber-400 py-4  text-center text-2xl  font-semibold">Test individuel</h1>

            <div class="p-8 -mr-6 -mb-8">
                  <form>
                        <fieldset>
                              <div>
                                    <h2 class="bg-amber-100 py-2 px-3 rounded  text-start  text-xl  font-semibold  m-x-3 ">
                                          Test de Mémorisation immédiate
                                    </h2>
                                    <InputLabel for="typeTest">Note:</InputLabel>
                                    <TextInput type="number" id="typeTest" name="test1"
                                          class="pr-6 pb-8 w-full lg:w-1/2 mb-5"  v-model="testValue9"/>
                              </div>
                              <div>
                                    <h2 class="bg-amber-100 py-2 px-3 rounded  text-start  text-xl  font-semibold  m-x-3 ">
                                          Test d'Anglais
                                    </h2>
                                    <InputLabel for="typeTest">Note:</InputLabel>
                                    <TextInput type="number" id="typeTest" name="test2"
                                          class="pr-6 pb-8 w-full lg:w-1/2 mb-5"  v-model="testValue10"/>
                              </div>
                              <div>
                                    <h2 class="bg-amber-100 py-2 px-3 rounded  text-start  text-xl  font-semibold  m-x-3 ">
                                          Test d'Expression écrite
                                    </h2>
                                    <InputLabel for="typeTest">Note:</InputLabel>
                                    <TextInput type="number" id="typeTest" name="test3"
                                          class="pr-6 pb-8 w-full lg:w-1/2 mb-5"  v-model="testValue11"/>
                              </div>
                              <div>
                                    <h2 class="bg-amber-100 py-2 px-3 rounded  text-start  text-xl  font-semibold  m-x-3 ">
                                          Test d'Analyse de mail
                                    </h2>
                                    <InputLabel for="typeTest">Note:</InputLabel>
                                    <TextInput type="number" id="typeTest" name="test4"
                                          class="pr-6 pb-8 w-full lg:w-1/2 mb-5"  v-model="testValue12"/>
                              </div>

                              <div>
                                    <h2 class="bg-amber-100 py-2 px-3 rounded  text-start  text-xl  font-semibold  m-x-3 ">
                                          Test de Vitesse de frappe
                                    </h2>
                                    <InputLabel for="typeTest">Note:</InputLabel>
                                    <TextInput type="number" id="typeTest" name="test1"
                                          class="pr-6 pb-8 w-full lg:w-1/2 mb-5"  v-model="testValue13"/>
                              </div>
                              <div>
                                    <InputLabel>Statut:</InputLabel>
                                    <TextInput type="text" bind:value={$from.studentStatut}
                                          class="pr-6 pb-8 w-full lg:w-1/2 mb-5"  v-model="testValue14"/>
                              </div>
                              <div>
                                    <InputLabel>Session:</InputLabel>
                                    <select type="text" bind:value={$from.studentSelect}
                                          class="rounded-lg border-slate-400 pr-6 pb-8 w-full lg:w-1/2 mb-5" v-model="testValue15">
                                          <option value={null} />
                                          <option value="CA">26-04-2023</option>
                                          <option value="US">11-03-2023</option>
                                    </select>
                              </div> <br>
                              <button type="submit" herf="/"
                                    class="bg-amber-400 hover:bg-amber-500 px-5 py-3 rounded-lg text-slate-100 mb-6">Sauvagarder</button>
                        </fieldset>
                  </form>
            </div>
      </div>







      <div>

            <h1 class="bg-amber-400 py-4  text-center text-2xl  font-semibold">Test psychotechnique </h1>
            <div class="p-8 -mr-6 -mb-8">
                  <form>
                        <fieldset>
                              <div>
                                    <h2 class="bg-amber-100 py-2 px-3 rounded  text-start  text-xl  font-semibold  m-x-3 ">
                                          Test d'Analogie visuelle
                                    </h2>
                                    <InputLabel for="typeTest">Note:</InputLabel>
                                    <TextInput type="number" id="typeTest" name="test1"
                                          class="pr-6 pb-8 w-full lg:w-1/2 mb-5"  v-model="testValue16"/>
                              </div>
                              <div>
                                    <h2 class="bg-amber-100 py-2 px-3 rounded  text-start  text-xl  font-semibold  m-x-3 ">
                                          Test de Série numérique
                                    </h2>
                                    <InputLabel for="typeTest">Note:</InputLabel>
                                    <TextInput type="number" id="typeTest" name="test2"
                                          class="pr-6 pb-8 w-full lg:w-1/2 mb-5"  v-model="testValue17"/>
                              </div>
                              <div>
                                    <h2 class="bg-amber-100 py-2 px-3 rounded  text-start  text-xl  font-semibold  m-x-3 ">
                                          Test de Série alpha numérique
                                    </h2>
                                    <InputLabel for="typeTest">Note:</InputLabel>
                                    <TextInput type="number" id="typeTest" name="test3"
                                          class="pr-6 pb-8 w-full lg:w-1/2 mb-5" />
                              </div>
                              <div>
                                    <h2 class="bg-amber-100 py-2 px-3 rounded  text-start  text-xl  font-semibold  m-x-3 ">
                                          Test de Logique numérique
                                    </h2>
                                    <InputLabel for="typeTest">Note:</InputLabel>
                                    <TextInput type="number" id="typeTest" name="test4"
                                          class="pr-6 pb-8 w-full lg:w-1/2 mb-5"  v-model="testValue18"/>
                              </div>
                              <div>
                                    <h2 class="bg-amber-100 py-2 px-3 rounded  text-start  text-xl  font-semibold  m-x-3 ">
                                          Test de Cases à noircir
                                    </h2>
                                    <InputLabel for="typeTest">Note:</InputLabel>
                                    <TextInput type="number" id="typeTest" name="test5"
                                          class="pr-6 pb-8 w-full lg:w-1/2 mb-5"  v-model="testValue19"/>
                              </div>
                              <div>
                                    <h2 class="bg-amber-100 py-2 px-3 rounded  text-start  text-xl  font-semibold  m-x-3 ">
                                          Test du Chaudron autoformation
                                    </h2>
                                    <InputLabel for="typeTest">Note:</InputLabel>
                                    <TextInput type="number" id="typeTest" name="test6"
                                          class="pr-6 pb-8 w-full lg:w-1/2 mb-5"  v-model="testValue20"/>
                              </div>
                              <div>
                                    <h2 class="bg-amber-100 py-2 px-3 rounded  text-start  text-xl  font-semibold  m-x-3 ">
                                          Test de Vitesse de frappe
                                    </h2>
                                    <InputLabel for="typeTest">Note:</InputLabel>
                                    <TextInput type="number" id="typeTest" name="test1"
                                          class="pr-6 pb-8 w-full lg:w-1/2 mb-5"  v-model="testValue21"/>
                              </div>
                              <div>
                                    <InputLabel>Moyenne:</InputLabel>
                                    <TextInput type="text" bind:value={$from.testMoyenne}
                                          class="pr-6 pb-8 w-full lg:w-1/2 mb-5"  v-model="testValue22"/>
                              </div>
                              <div>
                                    <InputLabel>Statut:</InputLabel>
                                    <TextInput type="text" bind:value={$from.studentStatut}
                                          class="pr-6 pb-8 w-full lg:w-1/2 mb-5"  v-model="testValue23"/>
                              </div>
                              <div>
                                    <InputLabel>Session:</InputLabel>
                                    <select type="text" bind:value={$from.studentSelect}
                                          class="rounded-lg border-slate-400 pr-6 pb-8 w-full lg:w-1/2 mb-5" v-model="testValue24">
                                          <option value={null} />
                                          <option value="CA">26-04-2023</option>
                                          <option value="US">11-03-2023</option>
                                    </select>
                              </div> <br>
                              <button type="submit" herf="/"
                                    class="bg-amber-400 hover:bg-amber-500 px-5 py-3 rounded-lg text-slate-100 mb-6">Sauvagarder</button>
                        </fieldset>
                  </form>
            </div>
      </div>
</template>

