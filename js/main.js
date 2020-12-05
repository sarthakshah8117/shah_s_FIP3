import { fetchData, postData } from "./components/TheDataMiner.js";
(() => {
// Hamburger menu
    const navToogle = document.querySelector('.nav-toggle');
const navLinks = document.querySelectorAll('.nav_link')

navToogle.addEventListener('click', () => {
    document.body.classList.toggle('nav-open');
});

navLinks.forEach(link => {
    link.addEventListener('click', () => {
        document.body.classList.remove('nav-open');
    })
})
// end of hamburger menu







// vue bgins
    Vue.component("thumbnail-card",{
        props: ["item"],
        template: `<img  @click="logClicked" :src="'images/' + item.image" alt="item images">`,

        mounted:function(){
            console.log(`loaded a ${this.item.name}'s image`);
            // console.log(`${this.item.image}`);
        },

        methods:{
            logClicked(){
                console.log("Car image Selected", this.item.name);
                this.$emit("showmydata", this.item)
            }
            
        }
    });

    let vue_vm = new Vue({
        // link Vue to an element in our HTML
        //el: "#app",

        data: {
            message: "Click on image below to know more",
            
            removeAFormat: true,
            show_data: false,
            carModels: [],
            currentModelData: {}
        },

        // this is the "mounted" lifecycle hook. Vue is done creating itself, and has attached itself to the "app" div on the page
        mounted: function() {
            console.log("Vue is mounted, trying a fetch for the initial data");
            
            fetchData("./includes/index.php")
                .then(data => {
                    data.forEach(prof => this.carModels.push(prof));
                })
                .catch(err => console.error(err));            
        },

    

        methods: {
            carThumbSelected(item){
                console.log("clicked on a list item: ", item.name);
                this.show_data = this.show_data ? false : true;
                this.removeAFormat = false;
                this.currentModelData = item;
                
            }
           

            
        }

        
    })  .$mount("#app");
 // also connects Vue to your wrapper in HTML
})();