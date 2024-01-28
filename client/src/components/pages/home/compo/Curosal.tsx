import React from "react";
// @ts-ignore
import carousel_img1 from "../../../../assets/resources/carousel-img-1.jpeg";
// @ts-ignore
import carousel_img2 from "../../../../assets/resources/carousel-img-2.jpg";
// @ts-ignore
import carousel_img3 from "../../../../assets/resources/carousel-img-3.jpeg";


export const Curosal = () => {
  return (
    <div className="container-fluid">
      <div className="col-12 mx-0 w-100 ">
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
                <img
                  src={carousel_img1}
                  className="d-block w-100"
                  alt="..."
                />
                <div className="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>
                    Some representative placeholder content for the first slide.
                  </p>
                </div>
              </div>
              <div className="carousel-item">
                <img
                  src={carousel_img2}
                  className="d-block w-100"
                  alt="..."
                />
                <div className="carousel-caption d-none d-md-block">
                  <h5>second slide label</h5>
                  <p>
                    Some representative placeholder content for the first slide.
                  </p>
                </div>
              </div>
              <div className="carousel-item">
                <img
                  src={carousel_img3}
                  className="d-block w-100"
                  alt="..."
                />
                <div className="carousel-caption d-none d-md-block">
                  <h5>third slide label</h5>
                  <p>
                    Some representative placeholder content for the first slide.
                  </p>
                </div>
              </div>
            </div>
            <button
              className="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleAutoplaying"
              data-bs-slide="prev"
            >
              <span
                className="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
            </button>
            <button
              className="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleAutoplaying"
              data-bs-slide="next"
            >
              <span
                className="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
            </button>
          </div>
        </div>
      </div>
    </div>
  );
};
