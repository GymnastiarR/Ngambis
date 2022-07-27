<x-app-layout>
    <x-slot name="sidemenu">
        <x-sidemenu>
    
        </x-sidemenu>
    </x-slot>

    <div class="w-full lg:px-10 px-2 min-h-screen">
        <x-header-menu>
            
        </x-header-menu>
        <div class="my-7 py-8 lg:px-16 px-2 bg-white shadow-2xl flex flex-col w-full box-border">
          <form action="/soal" method="POST">
            @csrf
            <div class="lg:w-4/5 mb-6">
              <h2 class="text-2xl font-semibold">Soal</h2>
              <textarea id="editor" placeholder="Masukkan Soal. . . ." name="question" class="w-4/5"></textarea>
            </div>
            <div class="w-3/5">
              <div class="mb-6">
                <div class="flex items-center mb-4">
                  <input type="radio" name="is_true" value="opsi_satu">
                  <h2 class="">Opsi 1</h2>
                </div>
                <textarea placeholder="Opsi 1. . . ." name="opsi_satu" class="ckeditor"></textarea>
              </div>        
              <div class="mb-6">
                <div class="flex items-center mb-4">
                  <input type="radio" name="is_true" value="opsi_dua" >
                  <h2 class="">Opsi 2</h2>
                </div>
                <textarea placeholder="Opsi 2. . . ." name="opsi_dua" class="ckeditor"></textarea>
              </div>        
              <div class="mb-6">
                <div class="flex items-center mb-4">
                  <input type="radio" name="is_true" value="opsi_tiga" >
                  <h2 class="">Opsi 3</h2>
                </div>
                <textarea placeholder="Opsi 3. . . ." name="opsi_tiga" class="ckeditor"></textarea>
              </div>        
              <div class="mb-6">
                <div class="flex items-center mb-4">
                  <input type="radio" name="is_true" value="opsi_empat" >
                  <h2 class="">Opsi 4</h2>
                </div>
                <textarea placeholder="Opsi 4. . . ." name="opsi_empat" class="ckeditor"></textarea>
              </div>        
              <div class="mb-6">
                <div class="flex items-center mb-4">
                  <input type="radio" name="is_true" value="opsi_lima" >
                  <h2 class="">Opsi 4</h2>
                </div>        
                <textarea placeholder="Opsi 5. . . ." name="opsi_lima" class="ckeditor"></textarea>
              </div>        
            </div>
            <button class="w-32 rounded-full h-12 bg-blue-300" name="is_published" value="0">Simpan</button>
            <button class="w-32 rounded-full h-12 bg-green-300" value="1" name="is_published">Kirim</button>
          </form>
        </div>
    </div>
    <script>
      let input = document.querySelectorAll('.ckeditor');

      input.forEach(e => {
        ClassicEditor
          .create( e, 
          {
            ckfinder : {
              uploadUrl : "{{ route('images.upload').'?_token='.csrf_token()}}"
            }
            // extraPlugins: [ MyCustomUploadAdapterPlugin ],

          } 
            )
          .catch( error => {
              console.error( error );
          } );
      });
      ClassicEditor
          .create( document.querySelector( '#editor' ), 
          {
            ckfinder : {
              uploadUrl : "{{ route('images.upload').'?_token='.csrf_token()}}"
            }
            // extraPlugins: [ MyCustomUploadAdapterPlugin ],

          } 
            )
          .catch( error => {
              console.error( error );
          } );
    </script>
</x-app-layout>
