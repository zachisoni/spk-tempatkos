<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Calculation') }}
    </h2>
  </x-slot>

  <div class="py-12 bg-center bg-scroll bg-[url('https://source.unsplash.com/1500x1000?dorm')] bg-gray-700 bg-blend-multiply">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <h1 class="text-white font-bold text-xl mb-4">Please choose several alternatives to calculate</h1>
    
    <form action="{{ route('calculation/result') }}" method="POST">
      @csrf
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
      <table class="w-full text-sm text-left text-gray-400">
          <thead class="text-xs uppercase bg-gray-700 text-gray-400">
              <tr>
                  <th scope="col" class="px-6 py-3">
                      Product name
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Action
                  </th>
              </tr>
          </thead>
          <tbody id="alt-body">
              <tr class="bg-gray-800 border-b hover:bg-gray-900" id="0">
                  <th scope="row" class="px-6 py-3 font-medium whitespace-nowrap text-white">
                    <select name="alt[0]" id="alt[0]" class="w-2/5 bg-gray-600 rounded-md">
                      @foreach ($alternatives as $alternative)
                          <option value="{{ $alternative->id }}">{{ $alternative->name }}</option>
                      @endforeach
                    </select>
                  </th>
                  <td class="px-6 py-4">
                    <button type="button" id="del[0]" class="text-red-500" onclick="removeRow(0)">Delete</button>
                  </td>
              </tr>
          </tbody>
      </table>
    </div>
    <input type="text" name="ids" id="ids" value="0|" hidden>
      <button type="button" class="focus:outline-none text-white focus:ring-4 font-medium rounded-lg text-md px-5 bg-green-600 hover:bg-green-700 focus:ring-green-800 p-3 m-5 text-center"
        id="btn-add" onclick="addRow();">Tambah Alternatif</button>
      <button type="submit" class="bg-blue-600 hover:bg-blue-800 p-3 rounded-md">Hitung</button>
    </form>
  </div>
  
</div>
  <script>
    let size = 1;
    const add_btn = document.getElementById('btn-add')
    const alt_body = document.getElementById('alt-body')
    const size_input = document.getElementById('size')
    const alts = document.getElementById('ids')
    const firstAlt = document.getElementById('alt[0]')

    size_input.value = size
    // alts.value = `${size}|`

    function addRow(){
      const row = document.createElement('tr')
      row.classList.add ('bg-gray-800', 'border-b', 'hover:bg-gray-900')
      row.id = size
      const alt_td = document.createElement('th')
      alt_td.classList.add ('px-6', 'py-3', 'font-medium', 'whitespace-nowrap', 'text-white')
      const alt_dropdown = document.createElement('select')
      alt_dropdown.setAttribute("name", `alt[${size}]`)
      alt_dropdown.id = `alt[${size}]`
      alt_dropdown.innerHTML = `@foreach ($alternatives as $alternative)
            <option value="{{ $alternative->id }}">{{ $alternative->name }}</option>
        @endforeach`
      alt_dropdown.classList.add ('w-2/5', 'bg-gray-500','rounded-md')
        
      alt_td.appendChild(alt_dropdown)

      const action_td = document.createElement('td')
      action_td.innerHTML = `<button type="button" class="text-red-500 px-6 py-4" id="del[${size}]" onclick="removeRow(${size})">Delete</button>`

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