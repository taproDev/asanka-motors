import React from "react";

import "./compo.css";

//@ts-ignore
import slide_1 from "../../../../assets/resources/slide-1.png";
//@ts-ignore
import slide_2 from "../../../../assets/resources/slide-2.png";
//@ts-ignore
import slide_3 from "../../../../assets/resources/slide-3.png";
//@ts-ignore
import slide_4 from "../../../../assets/resources/slide-4.png";
//@ts-ignore
import slide_5 from "../../../../assets/resources/slide-5.png";
//@ts-ignore
import slide_6 from "../../../../assets/resources/slide-6.png";

export const HomePatnership = () => {
  return (
    <>
      <div className="col-12 mx-0 w-100 my-5 d-md-none">
        <div
          className="row"
          data-aos="fade-up"
          data-aos-duration="800"
          data-aos-delay="100"
          data-aos-once="true"
        >
          <div
            id="carouselExampleAutoplaying"
            className="carousel slide p-0"
            data-bs-ride="carousel"
          >
            <div className="carousel-inner">
              <div className="carousel-item active">
                <div className="row">
                  <div className="col-md-2 col-12">
                    <img src={slide_1} className="d-block w-100" alt="..." />
                  </div>
                </div>
              </div>
              <div className="carousel-item">
                <div className="row">
                  <div className="col-md-2 col-12">
                    <img src={slide_2} className="d-block w-100" alt="..." />
                  </div>
                </div>
              </div>
              <div className="carousel-item">
                <div className="row">
                  <div className="col-md-2 col-12">
                    <img src={slide_3} className="d-block w-100" alt="..." />
                  </div>
                </div>
              </div>
              <div className="carousel-item">
                <div className="row">
                  <div className="col-md-2 col-12">
                    <img src={slide_4} className="d-block w-100" alt="..." />
                  </div>
                </div>
              </div>
              <div className="carousel-item">
                <div className="row">
                  <div className="col-md-2 col-12">
                    <img src={slide_5} className="d-block w-100" alt="..." />
                  </div>
                </div>
              </div>
              <div className="carousel-item">
                <div className="row">
                  <div className="col-md-2 col-12">
                    <img src={slide_6} className="d-block w-100" alt="..." />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div className="col-12 mx-0 w-100 my-5 d-none d-md-block">
        <div
          className="row"
          data-aos="fade-up"
          data-aos-duration="800"
          data-aos-delay="100"
          data-aos-once="true"
        >
          <div
            id="carouselExampleAutoplaying"
            className="carousel slide p-0"
            data-bs-ride="carousel"
          >
            <div className="carousel-inner">
              <div className="carousel-item active">
                <div className="row">
                  <div className="col-md-2 col-12">
                    <img src={slide_1} className="d-block w-100" alt="..." />{" "}
                  </div>
                  <div className="col-md-2 col-12">
                    <img src={slide_2} className="d-block w-100" alt="..." />{" "}
                  </div>
                  <div className="col-md-2 col-4">
                    <img src={slide_3} className="d-block w-100" alt="..." />{" "}
                  </div>
                  <div className="col-md-2 col-4">
                    <img src={slide_4} className="d-block w-100" alt="..." />{" "}
                  </div>
                  <div className="col-md-2 col-4">
                    <img src={slide_5} className="d-block w-100" alt="..." />{" "}
                  </div>
                  <div className="col-md-2 col-4">
                    <img src={slide_6} className="d-block w-100" alt="..." />{" "}
                  </div>
                </div>
              </div>
              <div className="carousel-item">
                <div className="row">
                  <div className="col-md-2 col-4">
                    <img src={slide_6} className="d-block w-100" alt="..." />{" "}
                  </div>
                  <div className="col-md-2 col-4">
                    <img src={slide_5} className="d-block w-100" alt="..." />{" "}
                  </div>
                  <div className="col-md-2 col-4">
                    <img src={slide_4} className="d-block w-100" alt="..." />{" "}
                  </div>
                  <div className="col-md-2 col-4">
                    <img src={slide_3} className="d-block w-100" alt="..." />{" "}
                  </div>
                  <div className="col-md-2 col-4">
                    <img src={slide_2} className="d-block w-100" alt="..." />{" "}
                  </div>
                  <div className="col-md-2 col-4">
                    <img src={slide_1} className="d-block w-100" alt="..." />{" "}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  );
};
