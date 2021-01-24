<template>
  <div class="col-span-2">
    <button class="bg-custom-grayTwo px-2 rounded">
      <i class="fas fa-ellipsis-v text-custom-white fa-xs"></i>
    </button>
    <div class="grid grid-rows-2 gap-2 px-10 mt-16 h-2/4">
      <div class="row-span-1">
        <div class="profile my-4">
          <h1 class="text-custom-white text-4xl font-custom">Hi mohsen</h1>
          <h2 class="text-custom-grayOne text-lg josefin">Let's make project more amazing</h2>
        </div>
        <div class="search w-full bg-custom-grayTwo px-4 rounded py-2 flex items-center">
          <label id="search"><i class="fas fa-search fa-xs px-4 text-custom-grayOne"></i></label>
          <input type="text" id="search" placeholder="Search your project" class="bg-transparent text-custom-grayThree "/>
        </div>
      </div>
      <div class="row-span-1">
        <h2 class="text-custom-white mb-10">Projects <span class="text-custom-grayTwo">(18)</span></h2>
        <div class="projects grid grid-cols-3 gap-4 place-items-center">
          <div class="text-center text-custom-white ">
            <div class="h-24 w-28 bg-custom-blue rounded overlay-glass">
              <div class=" h-full flex items-center">
                <span class="text-xl text-center w-full">PT</span>
              </div>
            </div>
              <h6 class="text-custom-grayOne text-sm mt-2">Develpment</h6>
          </div>
          <div class="text-center text-custom-white ">
            <div class="h-24 w-28 bg-custom-pink rounded overlay-glass">
              <div class=" h-full flex items-center">
                <span class="text-xl text-center w-full">RA</span>
              </div>
            </div>
              <h6 class="text-custom-grayOne text-sm mt-2">Design</h6>
          </div>
          <div class="text-center text-custom-white ">
            <div class="h-24 w-28 bg-custom-yellow rounded overlay-glass">
              <div class=" h-full flex items-center">
                <span class="text-xl text-center w-full">TA</span>
              </div>
            </div>
              <h6 class="text-custom-grayOne text-sm mt-2">Testing</h6>
          </div>
          <div class="text-center text-custom-white ">
            <div class="h-24 w-28 bg-custom-greenOne rounded overlay-glass">
              <div class=" h-full flex items-center">
                <span class="text-xl text-center w-full">MD</span>
              </div>
            </div>
              <h6 class="text-custom-grayOne text-sm mt-2">Medium Draft</h6>
          </div>
          <div class="text-center text-custom-white ">
            <div class="h-24 w-28 bg-custom-purple rounded overlay-glass">
              <div class=" h-full flex items-center">
                <span class="text-xl text-center w-full">LP</span>
              </div>
            </div>
              <h6 class="text-custom-grayOne text-sm mt-2">Landing Page</h6>
          </div>
          <div class="text-center text-custom-white ">
            <div class="h-24 w-28 bg-custom-blueDarknest rounded overlay-glass">
              <div class=" h-full flex items-center">
                <span class="text-xl text-center w-full"><i class="fa fa-plus"></i></span>
              </div>
            </div>
              <h6 class="text-custom-grayOne text-sm mt-2">Add Project</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {};
</script>
<style>
</style>