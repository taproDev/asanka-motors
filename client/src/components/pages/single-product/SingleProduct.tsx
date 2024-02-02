import React, { useEffect, useState } from "react";
import { useLocation } from "react-router-dom";
import { fetchProductData } from "../../../api/load-single-product.ts";
import { Loading } from "../../common/loading/Loading.tsx";
import "./singleProduct.css";

interface ISingleProduct {
  name: String;
  partNumber: any;
  price: number | String;
  desciption: String;
  type: String;
  vehicle: String;
  sampleDiscription: String;
  imageArray: String[];
  colorArray: String[];
}

export const SingleProduct = () => {
  const location = useLocation();
  const [productData, setProductData] = useState<ISingleProduct>();
  const [loading, setLoading] = useState(true);
  const [mainImage, setMainImage] = useState();
  const [imageSrcArray, setImageSrcArray] = useState<string[]>([]);

  useEffect(() => {
    const searchParams = new URLSearchParams(location.search);
    const productId = searchParams.get("id");

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
                    <p className="text-center mt-3">{productData.sampleDiscription}</p>
                    <p className="text-center mt-5">{productData.desciption}</p>
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
