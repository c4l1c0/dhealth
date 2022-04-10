<template>
	<div class="card">
		<div class="card-header">
			Draft
			<!--<form action="/maketransaction" method="post">
				<input name=data type="hidden" :value="JSON.stringify(transaction)"> -->
		</div>
			<div class="card-body">
				<table class="table table-bordered">
				<thead>
				<tr>
				<th scope="col"><h5><b>#</b></h5></th>
				<th scope="col"><h5><b>Item</b></h5></th>
				<th scope="col"><h5><b>Signa</b></h5></th>
				<th scope="col"><h5><b>Qty</b></h5></th>
				<th scope="col"><h5><b>Action</b></h5></th>
				</tr>
				</thead>
				<tbody>
				<tr v-for="(item, i) in transaction" :key="item.hash">
					<td>
					<h5>{{ i+1 }} </h5>
					</td>
					<td>
					<h5><b><u>{{ item.hasOwnProperty("medicine") ? item.medicine.name : item.name }}</u></b></h5>
						<ul v-if="item.hasOwnProperty('recipe')" class="list-group ms-5">
							<li v-for="recipeitem in item.recipe">
								<em>{{recipeitem.medicine.name}}</em> (<b>qty : {{recipeitem.amount}}</b>)
							</li>
						</ul>
					</td>
					<td>
					<h5>{{ item.signa.name }}</h5>
					</td>
					<td>
					<h5>{{ item.amount == 0 ? $nbsp : item.amount }}</h5>
					</td>
					<td>
<button @click="removeItem(item)" class="btn btn-danger">X</button>
					</td>
				</tr>
				</tbody>
				</table>
			</div><!--card-body end-->
	</div><!--card end-->
</template>

<script>
export default {
	props: {
		transaction: Array
	},
	emits: ['removeTransactionItem'],
	methods:{
		removeItem(item){
			this.$emit('removeTransactionItem', item)
		}
	}
}
</script>

<style scoped>
</style>
