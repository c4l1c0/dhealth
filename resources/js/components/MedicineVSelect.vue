<template>
<vselect :options="paginated" :filterable=false @search="onSearch" aria-label="Default select example">
<li slot="list-footer" class="pagination">
<button :disabled="!hasPrevPage" @click="offset -= limit" class="btn btn-primary mx-3">Prev</button>
<button :disabled="!hasNextPage" @click="offset += limit" class="btn btn-primary mx-3">Next</button>
</li>
</vselect>
</template>

<script>
import 'vue-select/dist/vue-select.css';
    export default {
		data(){
			return{
				medarray: [],
				search: '',
				offset: 0,
				limit: 10,
			}
		},
		mounted(){
			axios.get('/medicines?q=vue').then(response => (this.medarray = response.data));
		},
		computed: {
    		filtered() {
      			return this.medarray.filter((medicine) =>
        			medicine.label.toLocaleLowerCase().includes(this.search.toLocaleLowerCase())
      			)
    		},
		paginated() {
		  return this.filtered.slice(this.offset, this.limit + this.offset)
		},
		hasNextPage() {
		  const nextOffset = this.offset + this.limit
		  return Boolean(
		    this.filtered.slice(nextOffset, this.limit + nextOffset).length
		  )
		},
		hasPrevPage() {
		  const prevOffset = this.offset - this.limit
		  return Boolean(
		    this.filtered.slice(prevOffset, this.limit + prevOffset).length
		  )
		},
	},
	methods: {
		onSearch(query) {
			this.search = query
			this.offset = 0
		},
	},
}
</script>
<style scoped>
.pagination {
  display: flex;
  margin: 0.25rem 0.25rem 0;
}
.pagination button {
  flex-grow: 1;
}
.pagination button:hover {
  cursor: pointer;
}
</style>
