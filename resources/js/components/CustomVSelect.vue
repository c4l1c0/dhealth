<template>
<vselect :value=value :options="paginated" placeholder="Type to search..." :filterable=false @input="(value) => $emit('input', value)" @search="onSearch" :selectable="(option) => option.hasOwnProperty('stock') ? option.stock > 0 : true">
	<template #selected-option="{ codename, name }">
		<div style="display: flex; align-items: baseline">
			<strong>{{ codename }}</strong>
			<em style="margin-start: 0.5rem">
				{{ name }} 
			</em>
		</div>
	</template>
	<template #option="{ codename, name, stock }">
		Code: {{ codename }}
		<br />
		Name: {{ name }}
		<br />
		<div v-if="stock != null">
			Stock: {{ stock }}
		</div>
	</template>
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
			search: '',
			offset: 0,
			limit: 10,
		}
	},
	emits: ['selection'],
	props: {
		dataArray: Array,
		value: Object
	},
	mounted(){
	},
	computed: {
		filtered() {
  			return this.dataArray.filter((data) =>
    			data.label.toLocaleLowerCase().includes(this.search.toLocaleLowerCase())
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
		onInput(data) {
			this.$emit('input', data)
		}
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
input::-webkit-input-placeholder { /* WebKit browsers */
    color:    #999;
}
input:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
    color:    #999;
}
input::-moz-placeholder { /* Mozilla Firefox 19+ */
    color:    #999;
}
input:-ms-input-placeholder { /* Internet Explorer 10+ */
    color:    #999;
}
</style>
