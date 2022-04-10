<template>
<div>
	<div class="form-group">                                          
		<div class="mb-3 row">                                        
				<label for="recipename" class="col-sm-2 col-form-label">Name</label>
			<div class="col-sm-10">                                    
				<div class="input-group">
					<input 
						type="text"
						onfocus="this.select();"
						class="form-control"
						maxlength="250"
						v-model="recipename"
					/>
				</div>                                                    
			</div>                                                    
		</div>                                                        
	</div>
	<div class="form-group">                                          
		<div class="mb-3 row">                                        
			<label for="signaselect" class="col-sm-2 col-form-label">Signa</label>
			<div class="col-sm-10">                                    
				<customvselect id="signaselect" :dataArray="signas" v-model="selectedsigna"></customvselect>
				<div class="mt-1 text-danger" hidden ref="signaselecterr">Must be selected.</div>
			</div>                                                    
		</div>                                                        
	</div>                                                        
	<div v-for="item in recipe" :key="item.id" class="card ms-5 mb-3">
		<div class="card-body">
			<div class="form-group mb-3">                                          
				<div style="text-align: right">             
					<button class="btn btn-danger" @click="removeItem(item)">X</button>
				</div>                                                        
			</div>
			<div class="form-group">                                          
				<div class="mb-3 row">                                        
					<label for="medselect" class="col-sm-2 col-form-label">Medicine</label>
					<div class="col-sm-10">                                    
						<customvselect id="medselect" :dataArray="meds" v-model="item.medicine"></customvselect>
						<div class="mt-1 text-danger" hidden :ref="`medselecterr${item.hash}`">Must be selected.</div>
					</div>                                                    
				</div>                                                        
			</div>
			<div class="form-group">                                          
				<div class="mb-3 row">                                        
						<label for="amount" class="col-sm-2 col-form-label">Amount</label>
					<div class="col-sm-5">                                    
						<div class="input-group">
							<input 
								type="number"
								onfocus="this.select();"
								@input="restrictAmount(item.id)"
								v-model="item.amount"
								id="amount"
								class="form-control text-end"
								step="0.01"
							/>
							<span class="input-group-text">Stock left</span>
							<span class="input-group-text">{{ item.medicine === null ? "0" : item.medicine.stock }}</span>
						</div>                                                    
						<div class="mt-1 text-danger" hidden :ref="`amounterr${item.hash}`">Must be larger than 0.</div>
						<div class="mt-1 text-danger" hidden :ref="`amounterrtoohigh${item.hash}`">Not enough stock.</div>
					</div>                                                    
				</div>                                                        
			</div>

		</div>                                                        
	</div>                                                        
	<div class="form-group m-3">                                          
		<div style="text-align: center">             
			<button type="submit" class="btn btn-success" @click="addItem">+</button>
		</div>                                                        
	</div>

	<div class="form-group">                                          
		<div style="text-align: right">             
			<button type="submit" class="btn btn-primary" @click="addRecipe">Add</button>
		</div>                                                        
	</div>
</div>
</template>

<script>
var hash = require('object-hash');
var id = 0;
    export default {
		data(){
			return{
				selectedsigna: null,
				amount: 0,
				recipename: "",
				recipe: [],
			}
		},
		emits: ['submission'],
		props:{
			meds: Array,
			signas: Array
		},
		mounted(){
			this.initRecipe()
		},
		methods:{
			initRecipe(){
				this.addItem();
				this.addItem();
			},
			addItem(){
				var item = {
					id: id++,
					medicine: null,
					amount: 0
				}
				item.hash=hash(item);
				this.recipe.push(item);
			},
			removeItem(item){
				this.recipe = this.recipe.filter((x) => x !== item);
			},
			restrictAmount (id) {
				this.recipe[id].amount=parseFloat(this.recipe[id].amount.match(/^\d+\.?\d{0,2}/));
					if(this.recipe[id].amount > parseFloat(this.recipe[id].medicine.stock)){
						this.recipe[id].amount = parseFloat(this.recipe[id].medicine.stock);
					}
			},
			validateRecipe (){
				console.log(this.$refs);
				let isValid = true;
				if(this.selectedsigna === null || Object.keys(this.selectedsigna).length === 0){
					this.$refs.signaselecterr.removeAttribute("hidden");
					isValid = false;
				}
				else this.$refs.signaselecterr.setAttribute("hidden", true);
				for(let i=0; i < this.recipe.length; i++){
					if(this.recipe[i].medicine === null || Object.keys(this.recipe[i].medicine).length === 0){
						this.$refs['medselecterr'+this.recipe[i].hash][0].removeAttribute("hidden");
						isValid = false;
					}
					else this.$refs['medselecterr'+this.recipe[i].hash][0].setAttribute("hidden", true);
					if(this.recipe[i].amount <= 0 || isNaN(this.recipe[i].amount)){
						this.$refs['amounterr'+this.recipe[i].hash][0].removeAttribute("hidden");
						isValid = false;
					}
					else this.$refs['amounterr'+this.recipe[i].hash][0].setAttribute("hidden", true);
					if(this.recipe[i].medicine !== null){
						if(this.recipe[i].amount > parseFloat(this.recipe[i].medicine.stock)){
							this.$refs['amounterrtoohigh'+this.recipe[i][0].hash].removeAttribute("hidden");
							isValid = false;
						}
						else this.$refs['amounterrtoohigh'+this.recipe[i].hash][0].setAttribute("hidden", true);
					}
				}
				if(isValid) return true;
				else return false;
			},
			addRecipe (){
				if(this.validateRecipe()){
					var item = { 
						name: this.recipename,
						recipe: this.recipe,
						signa: this.selectedsigna,
						amount: this.amount
					}
					this.$emit('submission', item)
					this.selectedsigna = null;
					this.amount = 0;
				}
			}
		},
}
</script>
