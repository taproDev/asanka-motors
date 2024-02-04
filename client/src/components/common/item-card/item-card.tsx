import React, { useEffect, useState } from "react";
import {
  ArrowRight,
  Link,
} from "react-bootstrap-icons";
import { useNavigate } from "react-router-dom";

import "./itemcard.css";
import { CartItem } from "../cart-item/CartItem.tsx";

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
  const [imageSrc, setImageSrc] = useState<string>("");
  const navigate = useNavigate();

  const onBuyNowClick = (productId: number | string) => {
    navigate(`/product?id=${productId}`);
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
          <CartItem productid={productid} price={price} />
          <button
            className="ms-2 px-3 pe-auto btn btn-sm btn-primary border-0 buynow-btn fs-6"
            onClick={() => {
              onBuyNowClick(productid);
            }}
          >
            see <ArrowRight className="fw-bold" />
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
            <CartItem productid={productid} price={price} />
            <button
              className="ms-2 px-3 pe-auto btn btn-sm btn-primary border-0 buynow-btn fs-6"
              onClick={() => {
                onBuyNowClick(productid);
              }}
            >
              see <ArrowRight className="fw-bold" />
            </button>
          </div>
        </div>
      </div>
    );
  }
};
