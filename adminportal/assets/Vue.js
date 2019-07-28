



var drop=new Vue({
    el:'#drop',
    data:{
        lists:[
            {
                name:"yadhu",
                age:'21',
                items:[
                    'cot 1',
                    'table 2',
                    'chair 4' 
                ]
            },
            {
                name:"venkatesh",
                age:'21',
                items:[
                    'cot 1',
                    'table 2',
                    'chair 4',
                    'dresser 1',
                    'fan 2'
                ]
            },
            {
                name:"venkat",
                age:'21',
                items:[
                    'cot 1',
                    'table 2',
                    'chair 4',
                    'tablemate 1',
                    
                ]
            },
            {
                name:"ve",
                age:'21',
                items:[
                    'cot 1',
                    'table 2',
                    'chair 4',
                    'sofa 2',
                    'cub board 1',
                    'washing machine 1'
                ]
            }
        ],
        lists2:[
            {
                name:"yadhu2",
                age:'21',
                quote:'21',
            },
            {
                name:"venkatesh2",
                age:'21',
                quote:'22'
            },
            {
                name:"venkat2",
                age:'21',
                quote:""
            },
            {
                name:"ve2",
                age:'21',
                quote:""
            }
        ],
        lists3:[
            {name:"yadhu23",age:'21',},
            {name:"venkatesh23",age:'21'},
            {name:"venkat23",age:'21'},
            {name:"ve23",age:'21',},
            
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
            },
            {
                name:"ve234"
                ,age:'21'
            }
        ],
    
     height:"300vh",
     display:"none",
     display1:"block",
    colors:[],
        
    },
    methods:{

        drop1(id1){
            var ids1 = document.getElementById(id1);
           ids1.style.maxHeight=this.height;
        //    ids1.style.display=this.display1;
        //    this.display="block"
           

        },
        drop2(id2){
            var ids2 = document.getElementById(id2);
            // ids2.style.display=this.display;
            // this.display="none";
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
    // created:function (){
    //     for(let list in this.lists2){
    //     if(this.lists2[list].quote!==""){
    //         console.log("hurry");
    //         this.colors.push(true);
            
    //     }
    //     else{
    //         this.colors.push(false);
    //     }
    //     console.log(this.lists2[list].quote);
        
    //     }
    //     console.log(this.colors);
    // }
  
   

});