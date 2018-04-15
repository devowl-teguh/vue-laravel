<template>
  <table>
    <tbody>
      <tr v-for="result in results" :key="result.objectID">
        <td>{{ result.name }}</td>
        <td>{{ result.Email }}</td>
      </tr>
    </tbody>
  </table>
</template>
<script>
import {Results} from 'vue-instantsearch';
export default {
  extends: Results
}
</script>
