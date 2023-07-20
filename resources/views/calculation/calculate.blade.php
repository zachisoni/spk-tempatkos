<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Calculation') }}
    </h2>
  </x-slot>

  <div class="">
    <h1>Alternatif</h1>
    <form action="{{ route('calculation/result') }}" method="POST">
      @csrf
      {{-- <input type="text" name="size" id="size" hidden> --}}
      <table>
        <thead>
          <tr>
            <th>Nama Alternatif</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody id="alt-body">
          <tr id="0">
            <td>
              <select name="alt[0]" id="alt[0]">
                @foreach ($alternatives as $alternative)
                    <option value="{{ $alternative->id }}">{{ $alternative->name }}</option>
                @endforeach
              </select>
            </td>
            <td>
              <button type="button" id="del[0]" onclick="removeRow(0)">Hapus</button>
            </td>
          </tr>
        </tbody>
      </table>
      {{-- <input type="text" id="ids" value="0|" name="ids"> --}}
      <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-md px-5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 p-3 m-5 text-center"
       id="btn-add" onclick="addRow();">Tambah Alternatif</button>
      <button type="submit">Hitung</button>
    </form>
    
  </div>
  <script>
    let size = 1;
    const add_btn = document.getElementById('btn-add')
    const alt_body = document.getElementById('alt-body')
    const size_input = document.getElementById('size')
    const alts = document.getElementById('ids')
    const firstAlt = document.getElementById('alt[0]')

    size_input.value = size

    function addRow(){
      const row = document.createElement('tr')
      row.id = size
      const alt_td = document.createElement('td')
      const alt_dropdown = document.createElement('select')
      alt_dropdown.setAttribute("name", `alt[${size}]`)
      alt_dropdown.id = `alt[${size}]`
      alt_dropdown.innerHTML = `<select name="alt[0]" id="alt[0]">
        @foreach ($alternatives as $alternative)
        <option value="{{ $alternative->id }}">{{ $alternative->name }}</option>
        @endforeach
        </select>`
        
      alt_td.appendChild(alt_dropdown)

      const action_td = document.createElement('td')
      action_td.innerHTML = `<button type="button" id="del[${size}]" onclick="removeRow(${size})">Hapus</button>`

      row.appendChild(alt_td)
      row.appendChild(action_td)

      alt_body.appendChild(row)
      console.log('create row : ', size);

      alts.value += `${size}|`
      size ++
      size_input.value = size
    }

    function removeRow(id){
      const row = document.getElementById(id)
      row.remove()
      alts.value = alts.value.replace(`${id}|`, '')
      console.log('remove row : ', id);
    }

  </script>
</x-app-layout>