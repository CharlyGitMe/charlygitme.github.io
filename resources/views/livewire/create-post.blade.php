<form class="flex flex-col w-80 space-y-4 mx-auto mt-10" wire:submit="save">
  <input class="p-2 rounded" type="text" placeholder="Title*" wire:model="title">
      @error('title')
          <span class="error">{{ $message }} </span> 
      @enderror

  <input class="p-2 rounded"  type="text" placeholder="Content*" wire:model="content">
      @error('content')
          <span class="error">{{ $message }} </span> 
      @enderror

  <button wire:loading.remove class="text-white bg-red-500 p-4 rounded-lg" type="submit">Save</button>
  <div wire:loading class="loader mx-auto justify-center"></div>
 
</form>
