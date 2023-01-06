@include('includes.header')
<div class="h-screen bg-blue-100">
  <div class="container mx-auto py-12 h-full">

    <div class="flex justify-center items-center flex-wrap h-full border-solid border-1 border-light-blue-500 text-gray-800 ">
      <div>
      <h1 class="font-sans text-2xl text-center font-bold text-pink-800 mb-8">CEB / Meter Readind Info</h1>
        <form>
          <div class="mb-6">
            <input
              type="text"
              class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
              placeholder="Account Number"
            />
          </div>

          <button
            type="submit"
            class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light"
          >
            Check Your Bill
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
@include('includes.footer')