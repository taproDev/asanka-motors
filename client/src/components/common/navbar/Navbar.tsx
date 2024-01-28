import React, { useEffect, useState } from "react";
import { Link } from "react-router-dom";
// @ts-ignore
import logo from "../../../assets/resources/logo.png";
import {
  CartCheckFill,
  EnvelopeAt,
  Facebook,
  Search,
  Whatsapp,
} from "react-bootstrap-icons";
import { EMAIL, FACEBOOK, WHATSAPP } from "../../constants/AppConstants.ts";
import { QuickNavbar } from "./nav-quick-filter.tsx";
import { useCart } from "../../../utils/cart-utils.ts";

export const NavBar = () => {
  const { cartItems , addToCart , removeFromCart } = useCart();
  const [cartItemsNumber, setCartItemsNumber] = useState<number>(0);

  useEffect(() => {
    setCartItemsNumber(cartItems.length);
    console.log("data change");
    
  }, [cartItems, addToCart , removeFromCart]);

  return (
    <>
      <div className="container-fluid col-12 px-0">
        <div
          className="col-12 header-top-bar text-black-50 "
          data-aos="fade-down"
          data-aos-duration="800"
          data-aos-delay="100"
          data-aos-once="true"
        >
          <div className="row col-12 d-flex flex-column flex-lg-row justify-content-lg-center mx-auto ">
            <div className="col-lg-5 col-12 d-flex justify-content-center justify-content-lg-start align-items-start mt-3">
              <Link to="/" className="text-decoration-none text-black-50 me-2">
                Home
              </Link>
              |
              <Link
                to="/single-product"
                className="text-decoration-none text-black-50 mx-2"
              >
                Contact
              </Link>
              |
              <Link
                to="/aboutus"
                className="text-decoration-none text-black-50 mx-2"
              >
                About Us |
              </Link>
              <a
                href={FACEBOOK}
                target="_blank"
                className="mx-1 cursor-pointer"
              >
                <Facebook size={19} />
              </a>
              <a
                href={WHATSAPP}
                target="_blank"
                className="mx-1 cursor-pointer"
              >
                <Whatsapp size={19} />
              </a>
              <a href={`mailto:${EMAIL}`} className="mx-1 cursor-pointer">
                <EnvelopeAt size={19} />
              </a>
            </div>
            <div className="col-lg-5 col-12 text-lg-end text-center mt-3">
              Premium Quality, Unbeatable Price: Your Source for the Best Parts!
            </div>
          </div>
        </div>
        <div className="col-12 p-3 ">
          <div className="row">
            <div className="col-12">
              <div className="row d-flex align-items-center  justify-content-around">
                <div className="col-6 col-lg-3">
                  <img
                    src={logo}
                    alt="logo"
                    className="img-fluid"
                    data-aos="fade-down"
                    data-aos-duration="800"
                    data-aos-delay="100"
                    data-aos-once="true"
                  />
                </div>

                <div className="col-lg-4 col-10 offset-1 d-none d-lg-block">
                  <div
                    className="input-group mt-2"
                    data-aos="fade-down"
                    data-aos-duration="800"
                    data-aos-delay="100"
                    data-aos-once="true"
                  >
                    <input
                      type="text"
                      className="form-control form-control border border-1 border-dark"
                    />
                    <button className=" btn btn-primary px-2">
                      <Search size={20} />
                    </button>
                  </div>
                </div>

                <div
                  className="col-lg-2 text-end col-5 text-end offset-1"
                  data-aos="fade-down"
                  data-aos-duration="800"
                  data-aos-delay="100"
                  data-aos-once="true"
                >
                  <Link
                    to="/cart"
                    className=" btn btn-sm btn-light bg-transparent border-0 position-relative"
                  >
                    <span>
                      <CartCheckFill size={25} />
                    </span>
                    <span className="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                      {cartItemsNumber}
                    </span>
                  </Link>
                  <span className="fw-bold ms-3">Rs:2500.00</span>
                </div>

                <div className="col-12 d-flex align-items-center d-block d-lg-none">
                  <div className="input-group">
                    <input
                      type="text"
                      className="form-control form-control-sm border-1 w-50"
                      id="dashboard-searching-bar"
                    />
                    <button className=" btn btn-primary px-2">
                      <Search size={20} />
                    </button>
                  </div>

                  <QuickNavbar />
                </div>
              </div>
            </div>
          </div>
          <div className="d-none d-lg-block">
            <QuickNavbar />
          </div>
        </div>
      </div>
    </>
  );
};
