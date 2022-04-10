<template>
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radioMedicine" v-model="selected" value="medicine" checked>
						  <label class="form-check-label" for="radioMedicine">Standalone</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radioRecipe" v-model="selected" value="recipe">
						  <label class="form-check-label" for="radioRecipe">Concoction</label>
						</div>
						<div class="my-3" v-if="selected === 'medicine'">
							<sform 
								:meds="meds" 
								:signas="signas"
								@submission="(item) => transaction.push(item)"
								/>
						</div>
						<div class="my-3" v-if="selected === 'recipe'">
							<cform
								:meds="meds"
								:signas="signas"
								@submission="(item) => transaction.push(item)"
							/>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="col-md-10">
				<ttable 
					:transaction="transaction"
					@removeTransactionItem="(item) => this.transaction = this.transaction.filter((x) => x !== item)"
				/>
				<div class="mt-1 text-danger" hidden ref="transerr">Need at least one item for a transaction.</div>
				<div class="form-group mt-3">                                          
					<div style="text-align: right">             
						<button name=submit type="submit" @click="submitTransaction" class="btn btn-primary">submit</button>
					</div>                                                        
				</div>
            </div>
        </div>
    </div>
</template>

<script>
var hash = require('object-hash');
    export default {
		data(){
			return{
				selected: 'medicine',
				meds: [],
				signas: [],
				transaction: [],
			}
		},
		mounted(){
			axios.get('/medicines?q=vue').then(response => (this.meds = response.data));
			axios.get('/signas?q=vue').then(response => (this.signas = response.data));
		},
		methods:{
			validateTransaction(){
				if(this.transaction.length < 1){
					this.$refs.transerr.removeAttribute("hidden");
					return false;
				}
				else return true;
			},
			submitTransaction(){
				if(this.validateTransaction()){
				const headers = { 
					"Content-Type": "application/json",
				};
				console.log(JSON.stringify(this.transaction));
				axios.post('/maketransaction', {data: JSON.stringify(this.transaction)}, {headers}).then(response => window.location.href='transactions');
				}
			},
		},
}
</script>
