<div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>
                    Crea Articolo
                </h1>
            </div>
        </div>
    </div>
    
                <form wire:submit.prevent="save">
                    <div class="mb-3">
                      <label class="form-label">Titolo</label>
                      <input type="text" class="form-control" wire:model.debounce.lazy="title" >
                      @error('title') <span class="error bg-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sottotitolo</label>
                        <input type="text" class="form-control" wire:model.debounce.lazy="subtitle" >
                        @error('subtitle') <span class="error bg-danger">{{ $message }}</span> @enderror
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Corpo</label>
                        <textarea name="" id="" cols="30" rows="10"class="form-control" wire:model.debounce.lazy="body" ></textarea>
                        @error('body') <span class="error bg-danger">{{ $message }}</span> @enderror
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
      
</div>
