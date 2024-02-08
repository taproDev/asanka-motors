import React, { useEffect, useState } from "react";
import { useLocation } from "react-router-dom";
import { fetchProductData } from "../../../api/load-single-product.ts";
import { Loading } from "../../common/loading/Loading.tsx";
import "./singleProduct.css";
import { CartItem } from "../../common/cart-item/CartItem.tsx";
import { PaymentOption } from "../../common/index.ts";
import { Cart } from "react-bootstrap-icons";
import QtyItem from "../../common/item-qty/QtyItem.tsx";
import { UseItemcardQty } from "../../../utils/item.qty-utils.ts";

interface ISingleProduct {
  id: number;
  name: String;
  partNumber: any;
  price: number | String;
  desciption: String;
  type: String;
  vehicle: String;
  sampleDiscription: String;
  imageArray: String[];
  colorArray: { name: string; code: string }[];
}

export const SingleProduct = () => {
  const location = useLocation();
  const [productData, setProductData] = useState<ISingleProduct>();
  const [loading, setLoading] = useState(false);
  const [mainImage, setMainImage] = useState();
  const [imageSrcArray, setImageSrcArray] = useState<string[]>([]);
  const [secImage , setSecImage] = useState();
  const searchParams = new URLSearchParams(location.search);
  const productId = searchParams.get("id");
  
  
  useEffect(() => {
    const fetchData = async () => {
      try {
        if (productId) {
          setLoading(true);
          const data = await fetchProductData(parseInt(productId));
          setProductData(data.Data);
          const imagePromises = data.Data.imageArray.map(
            async (imagePath: string) => {
              const imageModule = await import(
                `../../../assets/product/${imagePath}`
              );
              return imageModule.default;
            }
          );
          const loadedImages = await Promise.all(imagePromises);
          setImageSrcArray(loadedImages);
          setMainImage(loadedImages[0]);
          setSecImage(loadedImages[1])
        }
      } catch (error) {
        console.log(error);
      } finally {
        setLoading(false);
      }
    };

    fetchData();
  }, [location.search]);

  const handleImageClick = (image: any) => {
    setMainImage(image);
  };

  const handelBuyNow = () => {};

  const { quantity, handleIncrease, handleDecrease } = UseItemcardQty(productId,productData?.price);

  return (
    <>
      {loading ? (
        <Loading />
      ) : (
        <>
          {productData ? (
            <div className="d-flex flex-column flex-md-row mx-2">
              <div className="col-12 d-flex flex-column col-md-6 mx-1">
                <div className="text-center mx-auto my-3 d-md-none d-block">
                  <h1 className="fw-bold text-uppercase">{productData.name}</h1>
                </div>
                <div className="d-flex">
                  <div className="col-7">
                    <img
                      src={mainImage}
                      alt={productData.name as string}
                      className="w-100"
                    />
                    <img
                      src={mainImage}
                      alt={productData.name as string}
                      className="w-100 mt-2"
                      style={{transform:"rotate(180deg)"}}
                    />
                  </div>
                  <div className="col-4 mx-auto d-flex align-items-start">
                    <div className="image-list">
                      {imageSrcArray.map((image, index) => (
                        <img
                          key={index}
                          src={image}
                          alt={productData.name as string}
                          className="mb-2 img-fluid"
                          style={{ width: "100%", cursor: "pointer" }}
                          onClick={() => handleImageClick(image)}
                        />
                      ))}
                    </div>
                  </div>
                </div>
              </div>

              <div className="col-12 d-flex col-md-6 mx-auto ">
                <div>
                  <div className="text-center mx-auto d-md-block d-none">
                    <h1 className="fw-bold text-uppercase">
                      {productData.name}
                    </h1>
                  </div>

                  <div>
                    <p className="text-center mt-3">
                      {productData.sampleDiscription}
                    </p>
                    <p className="text-center mt-5">{productData.desciption}</p>
                  </div>

                  <div className="d-flex mt-5 flex-column flex-md-row">
                    <div className="col-12 col-md-4">
                      <ul>
                        <li>Vehical Type : {productData.vehicle}</li>
                        <li>Product Type : {productData.type}</li>
                      </ul>

                      <label>Colors : </label>
                      <ul>
                        {productData.colorArray.map((color, index) => (
                          <li key={index} className="d-flex">
                            <div
                              className="color-circle"
                              style={{
                                backgroundColor: color.code,
                                width: "20px",
                                height: "20px",
                                borderRadius: "50%",
                                margin: "5px",
                              }}
                            ></div>
                            <span>{color.name}</span>
                          </li>
                        ))}
                      </ul>
                    </div>

                    <div className="col-12 col-md-8">
                      <h1 className="text-center fw-bolder">
                        Rs : {productData.price}.00
                      </h1>

                      {/* add cart and qty */}

                      <div className=" mt-4">
                        <div className="d-flex justify-content-center mt-3">
                          <div className="mx-2">
                            <CartItem
                              productid={productData.id}
                              price={productData.price}
                              qty={quantity}
                            />
                          </div>
                          <div className="mx-2">
                            <QtyItem
                              quantity={quantity}
                              onIncrease={handleIncrease}
                              onDecrease={handleDecrease}
                            />
                          </div>
                        </div>
                        <div className="mt-4 text-center">
                          <h4>
                            Total Amount <br />{" "}
                            <span className="fs-5 fw-bold">
                              Rs: {(productData.price as number) * quantity}.00
                            </span>
                            <br />
                            <span className="text-danger fs-6">You are required to pay a delivery fee for courier service.</span>
                          </h4>
                        </div>
                      </div>

                      {/* payment option */}
                      <div className="d-flex justify-content-center">
                        <PaymentOption />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          ) : (
            <p className="fw-bold text-center fs-1">
              No product data available
            </p>
          )}
        </>
      )}
    </>
  );
};
