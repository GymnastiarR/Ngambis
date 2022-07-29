<x-app-layout>
    <x-slot name="sidemenu">
        <x-sidemenu>
    
        </x-sidemenu>
    </x-slot>

    <div class="w-full lg:px-10 px-2 min-h-screen">
        <x-header-menu>
            
        </x-header-menu>
        <div class="my-7 py-12 lg:px-16 px-2 bg-white shadow-2xl flex flex-col w-full box-border rounded-2xl">
          <form action="/soal" method="POST" class="">
            @csrf
            <div class="flex w-full mb-7">
              <h2 class="text-4xl font-semibold bg-white z-10 text-center w-full ">Buat Soal</h2>
            </div>
            <div>
              <label for="" class="mr-3 text-lg font-semibold">Pilih Kategori Soal: </label><input name="category" id="" type="text" list="category" class="mb-6 rounded-lg" required>
              <datalist id="category">
                <option value="Matematika">Matematika</option>
                <option value="Biologi">Biologi</option>
                <option value="Fisika">Fisika</option>
                <option value="Kimia">Kimia</option>
                <option value="Sejarah">Sejarah</option>
                <option value="Sosiologi">Sosiologi</option>
                <option value="Geografi">Geografi</option>
                <option value="Ekonomi">Ekonomi</option>
                <option value="Penalaran-Umum">Penalaran Umum</option>
                <option value="Pengetahuan-Kuantitatif">Pengetahuan Kuantitatif</option>
                <option value="geografi">geografi</option>
                <option value="ekonomi">ekonomi</option>
              </datalist>
            </div>
            @error('body')
              <p class="italic text-red-600 mb-2">{{ $message }}</p>
            @enderror
            <div class="lg:w-full mb-6 relative">
              <textarea id="editor" placeholder="Masukkan Soal. . . ." name="question" class="w-4/5"></textarea>
            </div>
            <div class="w-3/5">
              <div class="mb-6">
                <div class="flex items-center mb-4">
                  <input type="radio" name="is_true" class="mr-3" value="opsi_satu" required>
                  <h2 class="">Opsi 1</h2>
                </div>
                <textarea placeholder="Opsi 1. . . ." name="opsi_satu" class="ckeditor"></textarea>
              </div>        
              <div class="mb-6">
                <div class="flex items-center mb-4">
                  <input type="radio" name="is_true" class="mr-3" value="opsi_dua"  required>
                  <h2 class="">Opsi 2</h2>
                </div>
                <textarea placeholder="Opsi 2. . . ." name="opsi_dua" class="ckeditor"></textarea>
              </div>        
              <div class="mb-6">
                <div class="flex items-center mb-4">
                  <input type="radio" name="is_true" class="mr-3" value="opsi_tiga" required >
                  <h2 class="">Opsi 3</h2>
                </div>
                <textarea placeholder="Opsi 3. . . ." name="opsi_tiga" class="ckeditor"></textarea>
              </div>        
              <div class="mb-6">
                <div class="flex items-center mb-4">
                  <input type="radio" name="is_true" class="mr-3" value="opsi_empat" required>
                  <h2 class="">Opsi 4</h2>
                </div>
                <textarea placeholder="Opsi 4. . . ." name="opsi_empat" class="ckeditor"></textarea>
              </div>        
              <div class="mb-6">
                <div class="flex items-center mb-4">
                  <input type="radio" name="is_true" class="mr-3" value="opsi_lima" required >
                  <h2 class="">Opsi 5</h2>
                </div>        
                <textarea placeholder="Opsi 5. . . ." name="opsi_lima" class="ckeditor"></textarea>
              </div>        
            </div>
            <button class="w-32 rounded-full h-12 bg-blue-300 hover:bg-gradient-to-r hover:from-blue-800 hover:to-blue-400 hover:text-white shadow-2xl transition-all duration-700 font-semibold" name="is_published" value="0">Simpan</button>
            <button class="w-32 rounded-full h-12 bg-green-300 hover:bg-gradient-to-r hover:from-green-600 hover:to-green-500 hover:text-white shadow-2xl transition-all duration-700 font-semibold" value="1" name="is_published">Kirim</button>
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
