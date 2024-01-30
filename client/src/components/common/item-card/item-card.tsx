import React, { useEffect, useState } from "react";
import { Cart, CartFill } from "react-bootstrap-icons";

//@ts-ignore
import { useCart, getcartItemsSessionData } from "../../../utils/cart-utils.ts";

interface itemCardProp {
  title: string;
  price: number;
  productid: number;
  productImage: string;
  type: string;
}

export const Itemcard = ({
  title,
  price,
  productid,
  productImage,
  type = "row",
}: itemCardProp) => {
  //cart item adding and emoving
  const { addToCart, removeFromCart } = useCart();
  const [isCartAdded, setIsCartAdded] = useState(false);
  const [imageSrc, setImageSrc] = useState<string>('');

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
        <a href="singleproduct?id=20">
        <img className="w-75 rounded" src={imageSrc} alt={title} />
        </a>
        <div className="product-details text-start">
          <h2 className="sub-text fw-bold fs-6 mx-5 mt-3">
            {title}
          </h2>
          <h3 className="text-dark fw-bold mx-5 fs-3">
            Rs: <span>{price.toFixed(2)}</span>
          </h3>
        </div>
        <div className="d-flex flex-row justify-content-center align-items-center mt-2">
          <button
            className="btn btn-sm pe-auto border-0 rounded"
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
            className="ms-2 px-2 pe-auto btn btn-sm btn-primary border-0 rounded"
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
        className="col-12 col-lg-4 col-md-5 mx-auto d-flex p-0 my-2 d-flex align-items-center"
        data-aos="fade-right"
        data-aos-duration="800"
        data-aos-delay="100"
        data-aos-once="true"
      >
        <div className="col-5 mx-auto">
          <a href="singleproduct?id=20">
            <img
              className="img-fluid rounded"
              src={imageSrc}
              alt={title}
              style={{ height: "60%" , width:"80%" }}
            />
          </a>
        </div>
        <div className="">
          <div className="text-start">
            <h2 className="sub-text fs-6">
              {title}
            </h2>
            <h3 className="text-dark fw-bold fs-6">
              Rs: <span>{price.toFixed(2)}</span>
            </h3>
          </div>
          <div className="d-flex flex-row justify-content-start align-items-start mt-2">
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
