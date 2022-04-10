<template>
<div>
	<div class="form-group">                                          
		<div class="mb-3 row">                                        
			<label for="medselect" class="col-sm-2 col-form-label">Medicine</label>
			<div class="col-sm-10">                                    
				<customvselect id="medselect" :dataArray="meds" v-model="selectedmed"></customvselect>
				<div class="mt-1 text-danger" hidden ref="medselecterr">Must be selected.</div>
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
	<div class="form-group">                                          
		<div class="mb-3 row">                                        
				<label for="amount" class="col-sm-2 col-form-label">Amount</label>
			<div class="col-sm-5">                                    
				<div class="input-group">
					<input 
						type="number"
						onfocus="this.select();"
						@input="restrictAmount"
						v-model="amount"
						id="amount"
						class="form-control text-end"
						step="0.01"
					/>
					<span class="input-group-text">Stock left</span>
					<span class="input-group-text">{{ selectedmed === null ? "0" : selectedmed.stock }}</span>
				</div>                                                    
				<div class="mt-1 text-danger" hidden ref="amounterr">Must be larger than 0.</div>
				<div class="mt-1 text-danger" hidden ref="amounterrtoohigh">Not enough stock.</div>
			</div>                                                    
		</div>                                                        
	</div>
	<div class="form-group">                                          
		<div style="text-align: right">             
			<button type="submit" class="btn btn-primary" @click="addMedicine">Add</button>
		</div>                                                        
	</div>
</div>
</template>

<script>
var hash = require('object-hash');
    export default {
		data(){
			return{
				selectedmed: null,
				selectedsigna: null,
				amount: 0,
			}
		},
		emits: ['submission'],
		props:{
			meds: Array,
			signas: Array
		},
		methods:{
			restrictAmount () {
				this.amount=parseFloat(this.amount.match(/^\d+\.?\d{0,2}/));
					if(this.amount > parseFloat(this.selectedmed.stock)){
						this.amount = parseFloat(this.selectedmed.stock);
					}
			},
			validateMedicine (){
				let isValid = true;
				if(this.selectedmed === null || Object.keys(this.selectedmed).length === 0){
					this.$refs.medselecterr.removeAttribute("hidden");
					isValid = false;
				}
				else this.$refs.medselecterr.setAttribute("hidden", true);
				if(this.selectedsigna === null || Object.keys(this.selectedsigna).length === 0){
					this.$refs.signaselecterr.removeAttribute("hidden");
					isValid = false;
				}
				else this.$refs.signaselecterr.setAttribute("hidden", true);
				if(this.amount <= 0 || isNaN(this.amount)){
					this.$refs.amounterr.removeAttribute("hidden");
					isValid = false;
				}
				else this.$refs.amounterr.setAttribute("hidden", true);
				if(this.amount > parseFloat(this.selectedmed.stock) || isNaN(this.amount)){
					this.$refs.amounterrtoohigh.removeAttribute("hidden");
					isValid = false;
				}
				else this.$refs.amounterrtoohigh.setAttribute("hidden", true);
				if(isValid) return true;
				else return false;
			},
			addMedicine (){
				if(this.validateMedicine()){
					var item = { 
						medicine: this.selectedmed,
						signa: this.selectedsigna,
						amount: this.amount
					}
					item.hash = hash(item);
					this.$emit('submission', item)
					this.selectedmed = null;
					this.selectedsigna = null;
					this.amount = 0;
				}
			}
		},
}
</script>
