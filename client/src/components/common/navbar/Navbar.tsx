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
import { load_eror } from "../../../utils/load_errror_page.ts";
import { fetchSearchProductData } from "../../../api/load-search-data-nav.ts";

export const NavBar = () => {
  const { cartItems, addToCart, removeFromCart } = useCart();
  const [cartItemsNumber, setCartItemsNumber] = useState<number>(0);

  const handleContactClick = (id: string) => {
    const targetElement = document.getElementById(id);

    if (targetElement) {
      targetElement.scrollIntoView({ behavior: "smooth" });
    }
  };

  const [searchingItem, setSearchingItem] = useState("");
  const [suggestions, setSuggestions] = useState<string[]>([]);
  const [loading, setLoading] = useState(true);
  const [mockSuggestions, setMockSuggestions] = useState<string[]>([]);

  useEffect(() => {
    const fetchData = async () => {
      try {
        setLoading(true);
        const data = await fetchSearchProductData(searchingItem);
        await setMockSuggestions(data.proddata);
      } catch (error) {
        console.error("Error fetching data:", error);
        //load_eror();
      } finally {
        setLoading(false);
      }
    };

    fetchData();
  }, [searchingItem, setSearchingItem]);

  const searchItem = (e: any) => {
    const searchValue = e.target.value;
    setSearchingItem(searchValue);

    const filteredSuggestions = mockSuggestions.filter((suggestion: any) =>
      suggestion.name.toLowerCase().includes(searchValue.toLowerCase())
    );
    setSuggestions(filteredSuggestions);    
  };

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
                to="#contactUs"
                className="text-decoration-none text-black-50 mx-2"
                onClick={() => {
                  handleContactClick("contactUs");
                }}
              >
                Contact
              </Link>
              |
              <Link
                to="#aboutUs"
                className="text-decoration-none text-black-50 mx-2"
                onClick={() => {
                  handleContactClick("aboutUs");
                }}
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

                <div className="col-12 d-flex align-items-baseline ">
                  <div className="input-group w-50 mx-auto">
                    <input
                      type="text"
                      className="form-control form-control-sm border-1 border-dark mt-3 w-50"
                      id="dashboard-searching-bar"
                      value={searchingItem}
                      onChange={searchItem}
                      list="suggestions-list"
                    />
                    <datalist id="suggestions-list">
                      {suggestions.map((suggestion, index) => (
                        <option key={index} value={suggestion} />
                      ))}
                    </datalist>
                  </div>
                  <div>
                    <QuickNavbar />
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
