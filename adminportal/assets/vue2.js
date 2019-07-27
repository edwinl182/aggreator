





var drop2=new Vue({
    el:'#drop2',
    data:{
        lists2:[
            {name:"yadhu",age:'21',},
            {name:"venkatesh",age:'21'},
            {name:"venkat",age:'21'},
            {name:"ve",age:'21'}
        ],
     height:"100vh"
        
    },
    methods:{

        drop12(id1){
            var ids1 = document.getElementById(id1);
           ids1.style.maxHeight=this.height;

           console.log(ids1);

        },
        drop22(id2){
            var ids2 = document.getElementById(id2);
            // this.height="100px";
        },
                drop12(id1){
            var ids1 = document.getElementById(id1);
           ids1.style.maxHeight=this.height;

           console.log(ids1);

        },
        drop22(id2){
            var ids2 = document.getElementById(id2);
            // this.height="100px";
        }
    },
  
   

});