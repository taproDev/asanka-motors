import React from "react";
import './compo.css';
import {
   Gear, Stopwatch, Truck
  } from "react-bootstrap-icons";
export const Service = () => {
    return (
   <div className="container">
    <div id="aboutUs" className="col-12 d-flex flex-column flex-lg-column justify-content-between mx-auto my-5 shadow-md border-0 rounded p-4">
        <div className="row ">
            <div className="col-12 col-lg-4 my-3">
                <div className="row d-flex flex-row align-items-center justify-content-center aboutUs-short" data-aos="fade-right" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
                    <div className="col-3">
                        <p className="text-center aboutUs-short-icon text-danger"><Gear/></p>
                    </div>
                    <div className="col-9 aboutUs-short-content text-start">
                        <h3 className="fs-5">Genuine Spare Parts </h3>
                        <p className="fs-6">Best Quality & Genuine motor bike and threewheel spare parts.</p>
                    </div>
                </div>
            </div>

            <div className="col-12 col-lg-4 my-3">
                <div className="row d-flex flex-row align-items-center justify-content-center aboutUs-short " data-aos="fade-right" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
                    <div className="col-3">
                        <p className="text-center aboutUs-short-icon"><Stopwatch/></p>
                    </div>
                    <div className="col-9 aboutUs-short-content text-start">
                        <h3 className="fs-5">24/7 Service</h3>
                        <p className="fs-6">Contact us 24 hours a day. Email,
                            Whatsapp , Mobile etc.</p>
                    </div>
                </div>
            </div>

            <div className="col-12 col-lg-4 my-3">
                <div className="row d-flex flex-row align-items-center justify-content-center aboutUs-short" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300" data-aos-once="true">
                    <div className="col-3">
                        <p className="text-center aboutUs-short-icon"><Truck/></p>
                    </div>
                    <div className="col-9 aboutUs-short-content text-start">
                        <h3 className="fs-5">Island Wide Delivery </h3>
                        <p className="fs-6">We offer island wide delivery service &
                            Many deliver options</p>
                    </div>
                </div>
            </div>

        </div>

        <div className="row">
            <p className="fs-6 text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias, ducimus nesciunt, perspiciatis totam quis autem dolores earum eligendi accusamus saepe officiis? Corrupti maiores officia nulla aperiam, temporibus ipsam asperiores deserunt minima adipisci nesciunt cupiditate fuga? Velit, vel itaque. Assumenda, velit laborum nesciunt officiis deserunt reprehenderit nemo accusantium repellat laudantium ratione?</p>
        </div>
    </div>
   </div>
    );
  };
  