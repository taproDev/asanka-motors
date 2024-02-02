import React, { useEffect, useState } from "react";
import { Cart, CartFill, Link } from "react-bootstrap-icons";

//@ts-ignore
import { useCart } from "../../../utils/cart-utils.ts";

import "./itemcard.css";

interface itemCardProp {
  title: string;
  price: number;
  productid: number;
  productImage: string;
  type: string;
  sampleDis?: string;
}

export const Itemcard = ({
  title,
  price,
  productid,
  productImage,
  type = "row",
  sampleDis,
}: itemCardProp) => {
  //cart item adding and emoving
  const { addToCart, removeFromCart } = useCart();
  const [isCartAdded, setIsCartAdded] = useState(false);
  const [imageSrc, setImageSrc] = useState<string>("");

  const handleCartClick = (pid: number, price: number) => {
    setIsCartAdded(!isCartAdded);
    isCartAdded ? removeFromCart(pid) : addToCart(pid, price);
  };

  const onBuyNowClick = (productImage: String) => {
    console.log(productImage);
  };

  useEffect(() => {
    const loadImage = async () => {
      try {
        const imageModule = await import(
          `../../../assets/product/${productImage}`
        );
        setImageSrc(imageModule.default);
      } catch (error) {
        console.error("Error loading image:", error);
      }
    };

    loadImage();
  }, [productImage]);

  if (type == "row") {
    return (
      <div
        className="col-12 col-lg-3 col-md-5 my-3 mx-0 "
        data-aos="fade-right"
        data-aos-duration="800"
        data-aos-delay="100"
        data-aos-once="true"
      >
        <div className="image-container">
          <img
            className="w-75 img-fluid rounded product-img"
            src={imageSrc}
            alt={title}
          />
          <div className="overlay">
            <a href={`./product?id=${productid}`} className="visit-link">
              <Link />
            </a>
          </div>
        </div>
        <div className="product-details text-center">
          <h2 className="text-title mx-4 mt-3">{title}</h2>
          <p className="mx-4 mt-2">{sampleDis}</p>
          <h3 className="text-price mx-5 fs-3">
            Rs: <span>{price.toFixed(2)}</span>
          </h3>
        </div>
        <div className="d-flex flex-row justify-content-center align-items-center mt-2">
          <button
            className="btn btn-sm pe-auto border-0 cart-icon"
            onClick={() => {
              handleCartClick(productid, price);
            }}
          >
            {isCartAdded ? (
              <CartFill className="text-danger fs-4 ms-1 pe-auto" />
            ) : (
              <Cart className="text-danger fs-4 ms-1 pe-auto" />
            )}
          </button>
          <button
            className="ms-2 px-2 pe-auto btn btn-sm btn-primary border-0 buynow-btn"
            onClick={() => {
              onBuyNowClick(productImage);
            }}
          >
            Buy Now
          </button>
        </div>
      </div>
    );
  } else {
    return (
      <div
        className="col-12 col-lg-4 mx-auto d-flex p-0 my-2 d-flex align-items-center"
        data-aos="fade-right"
        data-aos-duration="800"
        data-aos-delay="100"
        data-aos-once="true"
      >
        <div className="col-6 mx-auto">
          <div className="image-container">
            <img
              className="me-1 img-fluid rounded product-img"
              src={imageSrc}
              alt={title}
              style={{ height: "100%", width: "95%" }}
            />
            <div className="overlay-2">
              <a href={`product?id=${productid}`} className="visit-link">
                <Link />
              </a>
            </div>
          </div>
        </div>

        <div className=" me-3">
          <div className="text-center">
            <h2 className="text-title">{title}</h2>
            <p>{sampleDis}</p>
            <h3 className="text-price">
              Rs: <span>{price.toFixed(2)}</span>
            </h3>
          </div>
          <div className="d-flex flex-row justify-content-center align-items-start mt-1">
            <button
              className="btn btn-sm pe-auto border-0 rounded"
              onClick={() => {
                handleCartClick(productid, price);
              }}
            >
              {isCartAdded ? (
                <CartFill className="text-danger m-0 fs-4 pe-auto" />
              ) : (
                <Cart className="text-danger m-0 fs-4 pe-auto" />
              )}
            </button>
            <button
              className="ms-2 px-2 pe-auto btn btn-sm btn-primary border-0 rounded"
              onClick={() => {
                onBuyNowClick(productImage);
              }}
            >
              Buy Now
            </button>
          </div>
        </div>
      </div>
    );
  }
};
