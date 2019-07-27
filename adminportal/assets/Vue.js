



var drop=new Vue({
    el:'#drop',
    data:{
        lists:[
            {name:"yadhu",age:'21',},
            {name:"venkatesh",age:'21'},
            {name:"venkat",age:'21'},
            {name:"ve",age:'21'}
        ],
        lists2:[
            {name:"yadhu2",age:'21',},
            {name:"venkatesh2",age:'21'},
            {name:"venkat2",age:'21'},
            {name:"ve2",age:'21'}
        ],
        lists3:[
            {name:"yadhu23",age:'21',},
            {name:"venkatesh23",age:'21'},
            {name:"venkat23",age:'21'},
            {name:"ve23",age:'21'}
        ],
        lists4:[
            {
                name:"yadhu24",
                age:'21',
            },
            {
                name:"venkatesh24",
                age:'21'
            },
            {
                name:"venkat24",
                age:'21'
            },
            {
                name:"ve24"
                ,age:'21'
            }
        ],
     height:"300vh",
     display:"none",
     display1:"block"
        
    },
    methods:{

        drop1(id1){
            var ids1 = document.getElementById(id1);
           ids1.style.maxHeight=this.height;
           ids1.style.display=this.display1;
           this.display="none"
           console.log(ids1);

        },
        drop2(id2){
            var ids2 = document.getElementById(id2);
            ids2.style.display=this.display;
            this.display="none";
            // this.height="100px";
        },
        drop12(id1){
            var ids1 = document.getElementById(id1);
           ids1.style.maxHeight=this.height;
            
           console.log(ids1);

        },  drop22(id2){
            var ids2 = document.getElementById(id2);
            // this.height="100px";
        }
    },
  
   

});