<div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1>
                    Counter
                </h1>
                <p class="display-1"> {{$counter}} </p>
                <input type="text" name="" id="" wire:model="incrementNumber">
                <button class="btn btn-warning px-3"
                wire:click="incrementByInputNumber()"
                >Incrementa</button>
                <button
                  class="btn btn-success px-3"
                wire:click="increment"
              > + </button>
              <button
                  class="btn btn-danger px-3"
                wire:click="decrease"
              > - </button>
              <button
              class="btn btn-success px-3"
              wire:click="incrementByNumber(5)"
            > +5 </button>
            <button
                class="btn btn-danger px-3"
              wire:click="decreaseByNumber(5)"
            > -5 </button>
            </div>
        </div>
    </div>
    
</div>
