import React from "react";
import { ArrowRight } from "react-bootstrap-icons";
import { Itemcard } from "../../../common/item-card/item-card.tsx";
import './compo.css';

export const HomePageBike = () => {
  return (
    <div className="">
        <div className="col-12 my-5">

        <div className="my-5 home-page-bike-section">
            <h1 className="text-dark" data-aos="fade-down" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">MotorBike Spareparts</h1>
            <p className="sub-text" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">Welcome to our Latest Product Section, where innovation and excellence meet to bring you the cutting-edge solutions you've been waiting
                for! <br/> Explore our newest arrivals, handpicked to elevate your experience and cater to your evolving needs.</p>
        </div>

            <div className="row">
                <div className="col-1-2 col-md-11 mx-auto">
                    <div className="row d-flex flex-wrap  justify-content-center flex-row text-center pb-4">
                        <Itemcard title={"Test product with FREE table and free data giv it with us same free"} price={1000} productid={10} productImage={"img_6561a8f7e8a13_7c93d4c0-7c76-450c-8a58-4fd2ba9c2171.jpeg"} type={'row'}/>
                        <Itemcard title={"Test product with FREE table and free data giv it with us same free"} price={1000} productid={20} productImage={"img_6561abeab960d_a7e29568-0e22-46e6-82d1-54bd4b234506.jpeg"} type={'row'}/>
                        <Itemcard title={"Test product with FREE table and free data giv it with us same free"} price={1000} productid={30} productImage={"img_6561a8f7e8a13_7c93d4c0-7c76-450c-8a58-4fd2ba9c2171.jpeg"} type={'row'}/>
                        <Itemcard title={"Test product with FREE table and free data giv it with us same free"} price={1000} productid={30} productImage={"img_6561a8f7e8a13_7c93d4c0-7c76-450c-8a58-4fd2ba9c2171.jpeg"} type={'row'}/>
                    </div>
                </div>
            </div>

            <div className="float-end ">
                <a href="#" className="btn btn-sm text-primary pe-auto px-3 border-0 rounded bg-light" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">see more <ArrowRight /> </a>
            </div>
        </div>
    </div>
  )
};
