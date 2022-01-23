<template>
<div>
    <!-- home section -->

    <section class="home" id="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>spicy noodles</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, tenetur?</p>
                        <a href="#" class="btn">Order now</a>
                    </div>
                    <div class="image">
                        <img :src="'/images/home-img-1.png'" alt="home dish">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>fried chicken</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, tenetur?</p>
                        <a href="#" class="btn">Order now</a>
                    </div>
                    <div class="image">
                        <img :src="'/images/home-img-2.png'" alt="home dish">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>hot pizza</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, tenetur?</p>
                        <a href="#" class="btn">Order now</a>
                    </div>
                    <div class="image">
                        <img :src="'/images/home-img-3.png'" alt="home dish">
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- end of home section -->

    <!-- dishes section -->

    <section class="dishes" id="dishes">

        <h3 class="sub-heading">Our Dishes</h3>
        <h1 class="heading">Popular Dishes</h1>

        <div class="box-container">

            <!-- single item -->
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img :src="'/images/dish-1.png'" alt="dishes">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$15.99</span>
                <a href="#" class="btn">Add to cart</a>
            </div>
            <!-- end of single -->

            <!-- single item -->
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img :src="'/images/dish-2.png'" alt="dishes">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$15.99</span>
                <a href="#" class="btn">Add to cart</a>
            </div>
            <!-- end of single -->

            <!-- single item -->
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img :src="'/images/dish-3.png'" alt="dishes">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$15.99</span>
                <a href="#" class="btn">Add to cart</a>
            </div>
            <!-- end of single -->

            <!-- single item -->
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img :src="'/images/dish-4.png'" alt="dishes">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$15.99</span>
                <a href="#" class="btn">Add to cart</a>
            </div>
            <!-- end of single -->

            <!-- single item -->
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img :src="'/images/dish-5.png'" alt="dishes">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$15.99</span>
                <a href="#" class="btn">Add to cart</a>
            </div>
            <!-- end of single -->

            <!-- single item -->
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img :src="'/images/dish-6.png'" alt="dishes">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$15.99</span>
                <a href="#" class="btn">Add to cart</a>
            </div>
            <!-- end of single -->

        </div>

    </section>

    <!-- end of dishes section -->

    <!-- about section -->

    <section class="about" id="about">

        <h3 class="sub-heading">About Us </h3>
        <h1 class="heading">why choose us?</h1>

        <div class="row">

            <div class="image">
                <img :src="'/images/about-img.png'">
            </div>

            <div class="content">
                <h3>best food in the country</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi molestiae dolore fugiat, vel
                    ratione aut harum inventore vero, incidunt quidem totam necessitatibus culpa suscipit! Enim natus
                    maiores id sapiente obcaecati!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam harum accusamus quod consectetur
                    impedit commodi explicabo repellat saepe inventore corporis!</p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shipping-fast"></i>
                        <span>free delivery</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-dollar-sign"></i>
                        <span>easy payments</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>24/7 service</span>
                    </div>
                </div>
                <a href="" class="btn">learn more</a>
            </div>

        </div>

    </section>

    <!-- end of about section -->

    <!-- menu section  -->

    <section class="menu" id="menu">

        <h3 class="sub-heading">Our Menu </h3>
        <h1 class="heading">today's speciality</h1>

        <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="width: 15%; margin-bottom:0;">
        <option selected>Menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        </select>
        <br>

        <div class="box-container"  v-for="food in foods.data" :key="food.id">

            <!-- single item -->
            <div class="box">
                <div class="image">
                    <img :src="'/images/menu-1.jpg'" alt="menu image">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>mdmcmcvmfm</h3>
                    <p>gjgjgjgj</p>
                    <a href="#" class="btn">Add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>
            <!-- end of single -->
            <!-- single item -->
            <div class="box">
                <div class="image">
                    <img :src="'/images/menu-1.jpg'" alt="menu image">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>mdmcmcvmfm</h3>
                    <p>gjgjgjgj</p>
                    <a href="#" class="btn">Add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>
            <!-- end of single -->
            <!-- single item -->
            <div class="box">
                <div class="image">
                    <img :src="'/images/menu-1.jpg'" alt="menu image">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>mdmcmcvmfm</h3>
                    <p>gjgjgjgj</p>
                    <a href="#" class="btn">Add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>
            <!-- end of single -->
        </div>

    </section>

    <!-- end of menu section  -->

    <!-- review section -->

    <section class="review" id="review">

        <h3 class="sub-heading">Customer's Review </h3>
        <h1 class="heading">what they say</h1>

        <div class="swiper review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img :src="'/images/pic-1.png'" alt="">
                        <div class="user-info">
                            <h3>high frezh</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, ex iure quibusdam ad fugit
                        eius quisquam ut dicta accusantium fugiat doloribus recusandae nostrum aut, sint non, itaque
                        laborum nemo eum!</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img :src="'/images/pic-2.png'" alt="">
                        <div class="user-info">
                            <h3>john doe</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, ex iure quibusdam ad fugit
                        eius quisquam ut dicta accusantium fugiat doloribus recusandae nostrum aut, sint non, itaque
                        laborum nemo eum!</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img :src="'/images/pic-3.png'" alt="">
                        <div class="user-info">
                            <h3>micheal jackson</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, ex iure quibusdam ad fugit
                        eius quisquam ut dicta accusantium fugiat doloribus recusandae nostrum aut, sint non, itaque
                        laborum nemo eum!</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img :src="'/images/pic-4.png'" alt="">                      <div class="user-info">
                            <h3>Avater</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, ex iure quibusdam ad fugit
                        eius quisquam ut dicta accusantium fugiat doloribus recusandae nostrum aut, sint non, itaque
                        laborum nemo eum!</p>
                </div>

            </div>

        </div>

    </section>

    <!--end of  review section -->

      <!-- order section -->

    <section class="order" id="order">

        <h3 class="sub-heading">Order Now </h3>
        <h1 class="heading">fast delivery</h1>

        <form action="">

            <div class="inputBox">
                <div class="input">
                    <span>Your Name</span>
                    <input type="text" placeholder="enter your name">
                </div>
                <div class="input">
                    <span>Your Name</span>
                    <input type="text" placeholder="enter your name">
                </div>
            </div>

            <div class="inputBox">
                <div class="input">
                    <span>Your Order</span>
                    <input type="text" placeholder="enter food name">
                </div>
                <div class="input">
                    <span>Additional Food</span>
                    <input type="test" placeholder="extra with food">
                </div>
            </div>

            <div class="inputBox">
                <div class="input">
                    <span>How Much</span>
                    <input type="number" placeholder="how many order">
                </div>
                <div class="input">
                    <span>Date and Time</span>
                    <input type="datetime-local">
                </div>
            </div>

            <div class="inputBox">
                <div class="input">
                    <span>Your Address</span>
                    <textarea name="" id="address" cols="30" rows="10" placeholder="enter your address"></textarea>
                </div>
                <div class="input">
                    <span>Your Message (Optional)</span>
                    <textarea name="" id="message" cols="30" rows="10" placeholder="write a sort message"></textarea>
                </div>
            </div>

            <input type="submit" value="order now" class="btn">

        </form>


    </section>

    <!-- end of order section -->

</div>

    
</template>

<script>
export default {
    data: () => ({
        foods: {},
        form: new Form({
            id:              '',
            food_name:       '',
            description:     '',
            food_image:      '',
            price:           '',
            slug:            '',
            categories:      '',
        })
    }),

    methods: {
        getAllFood(){
            axios.get('/api/foods').then(({data})=>(
                this.foods = data
            ))
        }

    },

     mounted(){

        window.scrollTo(0,0);

        window.onbeforeunload = function (){
            window.scrollTo(0,0);
        }

        // header slider
        const swiper1 = new Swiper('.home-slider', {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            loop: true,
        });
         // end of header slider

          // review slider
        const swiper2 = new Swiper('.review-slider', {
            spaceBetween: 15,
            centeredSlides: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            loop:true,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
        // end of review slider
    },

    created(){
        this.getAllFood();
    }



}
</script>

<style>

</style>