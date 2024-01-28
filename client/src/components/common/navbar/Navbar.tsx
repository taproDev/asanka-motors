import React from "react";
import { Link } from "react-router-dom";
// @ts-ignore
import logo from "../../../assets/resources/logo.png";
import {
  CaretDownFill,
  CartCheckFill,
  EnvelopeAt,
  Facebook,
  List,
  Search,
  Whatsapp,
} from "react-bootstrap-icons";
import {
  EMAIL,
  FACEBOOK,
  WEBNAME,
  WHATSAPP,
} from "../../constants/AppConstants.ts";

import Button from "react-bootstrap/Button";
import Container from "react-bootstrap/Container";
import Form from "react-bootstrap/Form";
import Nav from "react-bootstrap/Nav";
import Navbar from "react-bootstrap/Navbar";
import NavDropdown from "react-bootstrap/NavDropdown";

export const NavBar = () => {
  return (
    <>
      <div className="container-fluid col-12 px-0">
        <div
          className="col-12 header-top-bar text-black-50 d-none d-lg-block"
          data-aos="fade-down"
          data-aos-duration="800"
          data-aos-delay="100"
          data-aos-once="true"
        >
          <div className="row">
            <div className="col-5 offset-1 d-flex align-items-center">
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
                    src={logo}
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
                      className="form-control form-control border border-1 border-dark"
                    />
                    <button className=" btn btn-primary px-2">
                      <Search size={20} />
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
                  <Link
                    to="/cart"
                    className=" btn btn-sm btn-light bg-transparent border-0 position-relative"
                  >
                    <span>
                      <CartCheckFill size={25} />
                    </span>
                    <span className="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                      3
                    </span>
                  </Link>
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
        <div className="d-flex justify-content-lg-center justify-content-between mx-2">
          <div className="d-lg-none text-uppercase fw-bolder fs-2">
            {WEBNAME}
          </div>
          <nav className="navbar navbar-expand-lg bg-white">
            <div className="container d-flex">
              <button
                className="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span className="navbar-toggler-icon"></span>
              </button>
              <div className="collapse navbar-collapse" id="navbarNav">
                <ul className="navbar-nav">
                  <li className="nav-item">
                    <a className="nav-link active" aria-current="page" href="#">
                      All Product
                    </a>
                  </li>
                  <li className="nav-item">
                    <a className="nav-link" href="#">
                      Bike
                    </a>
                  </li>
                  <li className="nav-item">
                    <a className="nav-link" href="#">
                      Helmet
                    </a>
                  </li>
                  <li className="nav-item">
                    <a className="nav-link " href="#">
                      Three wheel
                    </a>
                  </li>
                  <li className="nav-item">
                    <a className="nav-link " href="#">
                      Modification Parts
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </>
  );
};
