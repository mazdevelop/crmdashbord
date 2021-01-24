<template>
  <div id="right" class="col-span-3 bg-custom-white p-8 rounded">
    <div class="grid grid-cols-2 gap-2 mb-4">
      <div class="grid grid-rows-2 gap-2">
        <h1>Development CRM</h1>
        <div class="flex">
          <div class="h-3 w-10 bg-custom-grayThree rounded"></div>
          <div class="h-3 w-10 bg-custom-greenTwo mx-3 rounded"></div>
        </div>
      </div>
      <div class="flex flex-row-reverse items-center ">
        <span class="w-6 h-6 p-1 rounded-full shadow flex items-center justify-center ml-3 border border-custom-grayOne text-custom-grayOne text-xs">
          <i class="fa fa-plus"></i>
        </span>
        <img class="w-8 h-8 -ml-3 p-1 rounded-full" src="https://images.pexels.com/photos/61100/pexels-photo-61100.jpeg?crop=faces&fit=crop&h=200&w=200&auto=compress&cs=tinysrgb" alt="" />
        <img class="w-8 h-8 -ml-3 p-1 rounded-full" src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?crop=faces&fit=crop&h=200&w=200&auto=compress&cs=tinysrgb" alt="" />
        <img class="w-8 h-8 -ml-3 p-1 rounded-full" src="https://i.imgur.com/zLCYdR9.jpg" alt="" />
      </div>
    </div>
    <p class="text-custom-grayTwo text-sm">
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, rem
      earum quam esse impedit dolore omnis hic dicta atque neque dolorum aperiam
      dolorem ipsum et sunt mollitia maiores voluptatem. Nam?
    </p>
    <div class="mt-8 grid grid-rows-3 gap-3 h-4/5 ">
    <div class="row-span-2">
      <div class="flex justify-between border-b-2 border-custom-grayThree">
          <h2 class="capitalize font-custom font-bold mb-2">Today's Task</h2>
          <div class="flex items-center">
              <span class="w-6 h-6 p-1 rounded shadow-xl flex items-center justify-center ml-3 bg-custom-greenTwo text-custom-white text-xs">
                <i class="fa fa-plus"></i>
              </span>
              <div class="h-4 w-7 bg-custom-grayThree rounded ml-3 flex items-center justify-center">
                <i class="fas fa-ellipsis-h text-custom-grayOne"></i>
              </div>
          </div>
        </div>
        <ul>
            <li class="grid grid-cols-12 gap-1 my-2">
                <div class="col-span-1 flex items-center justify-center ">
                    <input type="checkbox" name="" id="">
                </div>
                <div class="col-span-6 flex items-center justify-center  text-custom-grayOne text-xs">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum exercitationem ra
                </div>
                <div class="col-span-1 flex items-center justify-center ">
                    <button class="h-5 w-5 bg-custom-greenOne rounded flex items-center justify-center">
                        <i class="fa fa-trash text-xs text-custom-white"></i>
                    </button>
                </div>
                <div class="col-span-1 flex items-center justify-center ">
                    <button class="h-5 w-5 bg-custom-greenOne rounded flex items-center justify-center">
                        <i class="fa fa-edit text-xs text-custom-white"></i>
                    </button>
                </div>
                <div class="col-span-3 w-full flex items-center justify-center ">
                    <button class="h-5 w-32 bg-custom-greenOne rounded-2xl text-custom-white text-xs">
                        Lorem ipsum, dolor
                    </button>
                </div>
            </li>
            <li class="grid grid-cols-12 gap-1 my-2">
                <div class="col-span-1 flex items-center justify-center ">
                    <input type="checkbox" class=" text-custom-greenOne" checked>
                </div>
                <div class="col-span-6 flex items-center justify-center  text-custom-grayOne text-xs">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum exercitationem ra
                </div>
                <div class="col-span-1 flex items-center justify-center ">
                    <button class="h-5 w-5 bg-custom-greenOne rounded flex items-center justify-center">
                        <i class="fa fa-trash text-xs text-custom-white"></i>
                    </button>
                </div>
                <div class="col-span-1 flex items-center justify-center ">
                    <button class="h-5 w-5 bg-custom-greenOne rounded flex items-center justify-center">
                        <i class="fa fa-edit text-xs text-custom-white"></i>
                    </button>
                </div>
                <div class="col-span-3 w-full flex items-center justify-center ">
                    <button class="h-5 w-32 bg-custom-blue rounded-2xl text-custom-white text-xs">
                        Lorem ipsum, dolor
                    </button>
                </div>
            </li>
        </ul>
    </div>
    <div class="row-span-1">
      <div class="flex justify-between border-b-2 border-custom-grayThree">
          <h2 class="capitalize font-custom font-bold mb-2">upcoming</h2>
          <div class="flex items-center">
              <span class="w-6 h-6 p-1 rounded shadow-xl flex items-center justify-center ml-3 bg-custom-greenTwo text-custom-white text-xs">
                <i class="fa fa-plus"></i>
              </span>
              <div class="h-4 w-7 bg-custom-grayThree rounded ml-3 flex items-center justify-center">
                <i class="fas fa-ellipsis-h text-custom-grayOne"></i>
              </div>
          </div>
        </div>
        <ul class="upcoming-list"></ul>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data(){
    return{
      todayTask:[],
      uncoming:[],
      newTask:"",
    };
  },
  created() {
    this.fetchTodayTasks();
    this.fetchUpcoming();
  },
  methods:{
    fetchUpcoming(){
      fetch("/api/upcoming")
      .then(({data})=>{
        console.log(data);
        this.upcoming = data;
      })
      .catch((err)=> console.log(err));
    },
  }
};
</script>
<style lang="stylus"></style>