<section class="relative h-101  flex flex-col justify-center align-center text-center space-y-4 mb-4" style="width: 100%; height: 700px; background-image: url('images/employee.jpg'); background-size: cover; background-position: center;">
  <div style="background-color: rgb(13, 149, 222,0.5); ">
    <div class="z-10" style="margin-top: 5%;margin-bottom: 5%;">
      <h1 class="text-6xl font-bold uppercase text-white">
          Job<span class="text-black">Seeker</span>
      </h1>
      <p class="text-2xl text-gray-200 font-bold my-4">
          Hire and Seek Jobs As Much As You Want
      </p>
      @auth
      @else
      <a
        href="/register"
        class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black"
        >Sign Up to Hire</a
        >
      @endauth
    </div>
  </div>
</section>
