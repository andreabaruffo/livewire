<div>
    <form wire:submit.prevent="updatedArticle">
        <div class="mb-3">
          <label class="form-label">Titolo</label>
          <input type="text" class="form-control" wire:model="title" >
         
        </div>
        <div class="mb-3">
            <label class="form-label">Sottotitolo</label>
            <input type="text" class="form-control" wire:model="subtitle" >
           
          </div>
          <div class="mb-3">
            <label class="form-label">Corpo</label>
            <textarea name="" id="" cols="30" rows="10"class="form-control" wire:model="body" ></textarea>
           
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
