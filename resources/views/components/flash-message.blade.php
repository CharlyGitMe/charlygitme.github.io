@if (session()->has('message'))
  <div class="fixed mt-4 left-1/2 transform -translate-x-1/2 bg-green-400 text-white px-48 py-3">
    <p>
      {{session('message')}}
    </p>
  </div>
@endif