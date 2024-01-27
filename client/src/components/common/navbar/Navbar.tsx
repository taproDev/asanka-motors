import React from "react";
import { Link } from 'react-router-dom';
export const Navbar = () => {
  return (
    <>
      <div className="container-fluid col-12">
        <div
          className="col-12 p-2 header-top-bar text-black-50 d-none d-lg-block"
          data-aos="fade-down"
          data-aos-duration="800"
          data-aos-delay="100"
          data-aos-once="true"
        >
          <div className="row">
            <div className="col-5 offset-1">
              <Link className="text-decoration-none text-black-50 me-2">Home</Link>
              |
              <a
                href="./index.php #contactUs"
                className="text-decoration-none text-black-50 ms-2 me-2"
              >
                Contact Us
              </a>{" "}
              |
              <a
                href=""
                className="text-decoration-none text-black-50 ms-2 me-2"
              >
                About Us
              </a>
              |<span className="ms-2 me-3">Tel:</span>
              <a
                href="<?php echo $facebook ?>"
                className="text-black-50 ms-2 me-2"
              >
                <i className="bi bi-facebook"></i>
              </a>
              <a
                href="https://api.whatsapp.com/send?phone=<?php echo $mobile ?>"
                className="text-black-50  me-2"
              >
                <i className="bi bi-whatsapp"></i>
              </a>
              <a href="mailto:<?php echo $email ?>" className="text-black-50  ">
                {" "}
                <i className="bi bi-envelope"></i>
              </a>
            </div>
            <div className="col-5 text-end">
              Premium Quality, Unbeatable Price: Your Source for the Best Parts!
            </div>
          </div>
        </div>
        <div className="col-12 p-3 ">
          <div className="row">
            <div className="col-10 offset-1">
              <div className="row">
                <div className="col-6 col-lg-3">
                  <img
                    src="../resources/logo.png"
                    alt="logo"
                    className="img-fluid"
                    data-aos="fade-down"
                    data-aos-duration="800"
                    data-aos-delay="100"
                    data-aos-once="true"
                  />
                </div>

                <div className="col-4 offset-1 d-none d-lg-block">
                  <div
                    className="input-group mt-2"
                    data-aos="fade-down"
                    data-aos-duration="800"
                    data-aos-delay="100"
                    data-aos-once="true"
                  >
                    <input
                      type="text"
                      className="form-control form-control-sm"
                    />
                    <button className=" btn btn-sm btn-primary">
                      <i className="bi bi-search"></i>
                    </button>
                  </div>
                </div>

                <div
                  className="col-lg-3 col-5 text-end offset-1"
                  data-aos="fade-down"
                  data-aos-duration="800"
                  data-aos-delay="100"
                  data-aos-once="true"
                >
                  <a
                    href="./cart.php"
                    className=" btn btn-sm btn-light bg-transparent border-0 position-relative"
                  >
                    <i className="bi bi-cart4 text-primary fs-3"></i>
                    <span className="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                      3
                    </span>
                  </a>
                  <span className="fw-bold d-none d-lg-inline ms-3">
                    Rs:2500.00
                  </span>
                </div>

                <div className="col-12 d-block d-lg-none">
                  <div className="input-group mt-2">
                    <input
                      type="text"
                      className="form-control form-control-sm border-1"
                    />
                    <button className=" btn btn-sm btn-primary">
                      <i className="bi bi-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div className="col-12 bg-primary  text-white">
          <div className="row">
            <div className=" col-lg-10 offset-lg-1 offset-0 col-12">
              <div className=" col-11 d-lg-none p-2 text-center d-flex justify-content-between align-items-center">
                <h4 className="ms-2"> All Products</h4>
                <button className="border-0 bg-transparent text-white">
                  <i
                    className="bi bi-list text-white fs-3 me-3 fw-bold"
                    id="menuItems-list"
                  ></i>
                  <i
                    className="bi bi-x text-white fs-2 me-3 fw-bold d-none"
                    id="menuItems-close"
                  ></i>
                </button>
              </div>
              <div
                className="row offset-lg-0 d-none d-lg-flex d-lg-flex flex-lg-row flex-column row-cols-6 py-2 menu-list fade-in"
                id="menuList"
                data-aos="fade-down"
                data-aos-duration="800"
                data-aos-delay="100"
                data-aos-once="true"
              >
                <div
                  className="col-lg col-12 p-1 ps-2 justify-content-center category-bar-Item d-lg-flex align-items-center d-none"
                  data-aos="fade-right"
                  data-aos-duration="800"
                  data-aos-delay="100"
                  data-aos-once="true"
                >
                  <i className="bi bi-list text-white fs-5 me-3"></i>All
                  Products
                </div>
                <div
                  className="col-lg col-12 p-1 ps-2 justify-content-center category-bar-Item d-flex align-items-center"
                  data-aos="fade-right"
                  data-aos-duration="800"
                  data-aos-delay="200"
                  data-aos-once="true"
                >
                  <a
                    href="./bike.php"
                    className="text-white text-decoration-none"
                  >
                    Bikes
                  </a>{" "}
                  <button className="border-0 bg-transparent text-white">
                    <i className="bi ms-2 bi-caret-down-fill"></i>
                  </button>{" "}
                </div>
                <div
                  className="col-lg col-12 p-1 ps-2 justify-content-center category-bar-Item d-flex align-items-center"
                  data-aos="fade-right"
                  data-aos-duration="800"
                  data-aos-delay="300"
                  data-aos-once="true"
                >
                  <a
                    href="./threeWheel.php"
                    className="text-white text-decoration-none"
                  >
                    Three Wheels
                  </a>
                  <button className="border-0 bg-transparent text-white">
                    <i className="bi ms-2 bi-caret-down-fill"></i>
                  </button>{" "}
                </div>
                <div
                  className="col-lg col-12 p-1 ps-2 justify-content-center category-bar-Item d-flex align-items-center"
                  data-aos="fade-right"
                  data-aos-duration="800"
                  data-aos-delay="400"
                  data-aos-once="true"
                >
                  <a
                    href="./helmet.php"
                    className="text-white text-decoration-none"
                  >
                    Helmets
                  </a>{" "}
                  <button className="border-0 bg-transparent text-white">
                    <i className="bi ms-2 bi-caret-down-fill"></i>
                  </button>{" "}
                </div>
                <div
                  className="col-lg col-12 p-1 ps-2 justify-content-center category-bar-Item d-flex align-items-center"
                  data-aos="fade-right"
                  data-aos-duration="800"
                  data-aos-delay="500"
                  data-aos-once="true"
                >
                  <a
                    href="./modification.php"
                    className="text-white text-decoration-none"
                  >
                    Modification Parts
                  </a>{" "}
                  <button className="border-0 bg-transparent text-white">
                    <i className="bi ms-2 bi-caret-down-fill"></i>
                  </button>{" "}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  );
};
