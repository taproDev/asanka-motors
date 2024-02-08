import React, { useEffect, useState } from "react";
import "./AddedCartItem.css";

//@ts-ignore
import img from "../../../assets/product/img_6561a8f7e8a13_7c93d4c0-7c76-450c-8a58-4fd2ba9c2171.jpeg";
import { CartItem } from "../cart-item/CartItem.tsx";
import QtyItem from "../item-qty/QtyItem.tsx";
import { Link } from "react-bootstrap-icons";
import { UseItemcardQty } from "../../../utils/item.qty-utils.ts";
import { fetchCartProductData } from "../../../api/load-cart-product.ts";
import { Loading } from "../loading/Loading.tsx";

export const AddedCartItem = (pdata: any) => {
  const data = pdata.data;
  const { quantity, handleIncrease, handleDecrease } = UseItemcardQty(
    data.productId,
    data.price
  );
  const [loading, setLoading] = useState(false);
  const [productData, setProductData] = useState<any>();
  const [imageSrc, setImageSrc] = useState<any>("");

  useEffect(() => {
    const fetchData = async () => {
      try {
        if (data.productId) {
          setLoading(true);
          const dataSet = await fetchCartProductData(parseInt(data.productId));
          console.log(dataSet.cartItemData);
          setProductData(dataSet.cartItemData[0]);

          const imagePromises = dataSet.cartItemData.map(
            async (imagePath: any) => {
              const imageModule = await import(
                `../../../assets/product/${imagePath.image}`
              );
              return imageModule.default;
            }
          );
          const loadedImages = await Promise.all(imagePromises);
          setImageSrc(loadedImages);
        }
      } catch (error) {
        console.log(error);
      } finally {
        setLoading(false);
      }
    };

    fetchData();
  }, []);

  return (
    <>
      {loading ? (
        <Loading />
      ) : productData ? (
        <div className="row col-12 border border-1 shadow border-dark rounded my-2 AddedCartItem-width mx-auto p-3">
          <div className="d-flex flex-row align-items-center flex-column flex-md-row">
            <div className="col-12 col-md-8 d-flex align-items-center">
              <div className="col-5">
                <div className="image-container">
                  <img
                    className="img-fluid rounded product-img"
                    src={imageSrc}
                    alt={productData.title}
                  />

                  <div className="overlay">
                    <a
                      href={`./product?id=${data.productId}`}
                      className="visit-link"
                    >
                      <Link />
                    </a>
                  </div>
                </div>
              </div>
              <div className="col-7 d-flex flex-column ms-3">
                <p className="fw-bold" style={{ fontSize: "0.8rem" }}>
                  {productData.title}
                </p>
                <div>
                  <p className="fw-bold">
                    Price Rs:{data.price}.00 x {quantity}
                  </p>
                </div>
              </div>
            </div>

            <div className="col-12 col-md-4 d-flex flex-row flex-md-column justify-content-md-center">
              <p className="fw-bold text-center">
                Total: Rs.{data.price * quantity}.00
              </p>
              <div className="d-flex justify-content-center align-items-baseline">
                <CartItem
                  productid={data.productId}
                  price={data.price}
                  qty={data.qty}
                />
                <QtyItem
                  quantity={quantity}
                  onIncrease={handleIncrease}
                  onDecrease={handleDecrease}
                />
              </div>
            </div>
          </div>
        </div>
      ) : null}
    </>
  );
};
