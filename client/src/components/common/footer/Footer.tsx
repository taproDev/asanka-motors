import React from "react";

export const Footer = () => {



  return (
    <footer
      className="container-fluid mx-0 w-100"
      data-aos="fade-down"
      data-aos-duration="800"
      data-aos-delay="100"
      data-aos-once="true"
    >
      <div
        style={{ display: "flex", height: "30px" }}
        className="row mt-5 d-flex justify-content-around"
      >
        <div className="col-4" style={{ backgroundColor: "red" }}></div>
        <div className="col-8" style={{ backgroundColor: "blue" }}></div>
      </div>

      <div className="col-12 mt-3 pt-3">
        <div className="row">
          <div className="col-12 pb-1">
            <div className="row d-flex align-items-start justify-content-center">
              <div
                className="col-6 col-md-4"
                data-aos="fade-down"
                data-aos-duration="800"
                data-aos-delay="200"
                data-aos-once="true"
              >
                <span className="text-primary fs-4 fw-bold">
                  Store Location
                </span>
                <br />
                <br />
                <p className="product-para">
                  {" "}
                  964/1 E, <br />
                  Digana Nilagama,
                  <br />
                  Digana,
                  <br />
                  Kandy{" "}
                </p>

                <p className="product-para">
                  +94 777998361 <br />
                  +94 770545727
                </p>

                <p>sahanmadusha001@gmail.com</p>
              </div>

              <div className="row d-flex flex-row justify-content-around col-12 col-md-4">
                {/* <!-- usefull link --> */}
                <div
                  className="col-12"
                  data-aos="fade-down"
                  data-aos-duration="800"
                  data-aos-delay="200"
                  data-aos-once="true"
                >
                  <span className="text-primary fs-4 fw-bold">
                    Useful Links
                  </span>
                  <br />
                  <br />
                  <a href="./index.php" className="text-decoration-none">
                    <p className="product-para">Home</p>
                  </a>
                  <a href="./tyres.php" className="text-decoration-none">
                    <p className="product-para">Bike Spareparts</p>
                  </a>
                  <a
                    href="./modifications.php"
                    className="text-decoration-none"
                  >
                    <p className="product-para">Threewheel Spareparts</p>
                  </a>
                  <a href="./spareParts.php" className="text-decoration-none">
                    <p className="product-para">Helmets</p>
                  </a>
                  <a href="./blog.php" className="text-decoration-none">
                    <p className="product-para">Modification parts</p>
                  </a>
                </div>
              </div>

              <div
                className="col-12 col-md-4"
                data-aos="fade-down"
                data-aos-duration="800"
                data-aos-delay="200"
                data-aos-once="true"
              >
                <span className="text-primary fs-4 fw-bold">About Us</span>
                <br />
                <br />
                <div className="col-8">
                  <img
                    src="../resources/logo.png"
                    className="img-fluid"
                    alt=""
                  />
                </div>
                <br />
                <p className="">
                  Welcome to our Latest Product Section, where innovation and
                  excellence meet to bring you the cutting-edge solutions you've
                  been waiting for! Explore our newest arrivals, handpicked to
                  elevate your experience and cater to your evolving needs.
                </p>
                <a
                  href="mailto:dilukshagamage1@gmail.com"
                  className="text-decoration-none"
                >
                </a>
                <div className="col-12">
                  <img
                    src="../resources/payhere_short_banner_dark.png"
                    className="img-fluid"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
          <div className="col-12 bg-secondary p-4 text-center">
            Copyright &copy;{" "}
            <span>{new Date().getFullYear()} </span> TaproDev
            | All Rights Recerved
          </div>
        </div>
      </div>
    </footer>
  );
};
