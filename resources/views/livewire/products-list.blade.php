<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full text-center text-sm font-light text-gray-800">
          <thead class="border-b border-gray-200 bg-gray-100">
            <tr>
              <th scope="col" class="px-6 py-4">Numéro</th>
              <th scope="col" class="px-6 py-4">Nom</th>
              <th scope="col" class="px-6 py-4">Description</th>
              <th scope="col" class="px-6 py-4">Prix</th>
              <th scope="col" class="px-6 py-4">En Stock</th>
              
            </tr>
          </thead>
          <tbody class="bg-white">
            @foreach ($products as $index => $product)
            <tr class="border-b border-gray-200">
              <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $index + 1 }}</td>
              <td class="whitespace-nowrap px-6 py-4">{{ $product->name }}</td>
              <td class="whitespace-nowrap px-6 py-4">{{ $product->description }}</td>
              <td class="whitespace-nowrap px-6 py-4">FCFA{{ number_format($product->unit_price) }}</td>
              <td class="whitespace-nowrap px-6 py-4">{{ $product->stock }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
