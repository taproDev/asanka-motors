import React, { useEffect, useState } from "react";
import { Link } from "react-bootstrap-icons";
import "./itemcard.css";
import { CartItem } from "../cart-item/CartItem.tsx";
import QtyItem from "../item-qty/QtyItem.tsx";
import { UseItemcardQty } from "../../../utils/item.qty-utils.ts";

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
  const { quantity, handleIncrease, handleDecrease } = UseItemcardQty(productid,price);

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
        className="col-12 col-lg-3 col-md-5 my-3 mx-0"
        data-aos="fade-right"
        data-aos-duration="800"
        data-aos-delay="100"
        data-aos-once="true"
      >
        <div className="image-container">
          <img
            className="img-fluid rounded product-img"
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
          <h2 className="text-title mx-4 mt-3 text-wrapper">{title}</h2>
          <p className="mx-4 mt-2 text-wrapper-sampledis">{sampleDis}</p>
          <h3 className="text-price mx-5 fs-4">
            Rs: <span>{price}.00</span>
          </h3>
        </div>
        <div className="d-flex flex-row justify-content-center align-items-center mt-2">
          <CartItem productid={productid} price={price} />
          <QtyItem
            quantity={quantity}
            onIncrease={handleIncrease}
            onDecrease={handleDecrease}
          />
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
        <div className="col-5 mx-auto">
          <div className="image-container">
            <img
              className="me-1 img-fluid rounded product-img"
              src={imageSrc}
              alt={title}
              style={{ height: "38vh", width: "95%" }}
            />
            <div className="overlay-2">
              <a href={`product?id=${productid}`} className="visit-link">
                <Link />
              </a>
            </div>
          </div>
        </div>

        <div className=" me-1 col-6">
          <div className="text-center">
            <h2 className="text-title">{title}</h2>
            <p className="text-wrapper-sampledis-1">{sampleDis}</p>
            <h3 className="text-price">
              Rs: <span>{price}.00</span>
            </h3>
          </div>
          <div className="d-flex flex-row justify-content-center align-items-start mt-1">
            <CartItem productid={productid} price={price} />
            <QtyItem
              quantity={quantity}
              onIncrease={handleIncrease}
              onDecrease={handleDecrease}
            />
          </div>
        </div>
      </div>
    );
  }
};
