<div class="flex bg-gray-400 w-full align-center">
  <div class="w-full mx-4 my-auto">
    <h2 class="text-xl font-bold ">
      {{ $title ?? 'Postier'}}
    </h2>
  </div>
  <div class="flex content-end">
    @if ($newButton)
      <button class="bg-white hover:bg-gray-100 text-black font-bold py-2 px-4 m-2 rounded inline-flex items-center" type="button" name="button">New</button>
    @endif
    @if ($saveButton)
      <button class="bg-white hover:bg-gray-100 text-black font-bold py-2 px-4 m-2 rounded inline-flex items-center" type="button" name="button">Save</button>
    @endif
    @if ($cancelButton)
      <button class="bg-gray-700 hover:bg-gray-800 text-white font-bold py-2 px-4 m-2 rounded inline-flex items-center" type="button" name="button">Cancel</button>
    @endif
  </div>
</div>
