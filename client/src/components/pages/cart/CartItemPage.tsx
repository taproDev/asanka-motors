import React, { useEffect, useState } from "react";
import { Loading } from "../../common/loading/Loading.tsx";
import { getcartItemsSessionData } from "../../../utils/cart-item-utils.ts";
import { PaymentOption } from "../../common/payment-option/PaymentOption.tsx";
import { AddedCartItem } from "../../common/added-cart-item/AddedCartItem.tsx";
import { UseCartReload, UseCartTotal } from "../../../utils/cart-total-val-cal.ts";

export const CartItemPage = () => {
  const [loading, setLoading] = useState(false);
  const { cartItems } = getcartItemsSessionData();
  const { cartItemValue, cartItemsNumber } = UseCartTotal();

  return (
    <>
      {loading ? (
        <Loading />
      ) : (
        <>
          {cartItems.length > 0 ? (
            <div className="d-flex flex-column align-items-start flex-md-row container-fluid">
              <div className="col-md-8 col-12">
                <div>
                  <div>
                    {cartItems.map((data) => (
                      <AddedCartItem data={data} />
                    ))}
                  </div>
                </div>
              </div>

              <div className="d-flex flex-column justify-content-center col-md-4 col-12">
                <div>
                  <h1 className="text-center fs-3 fw-bold">
                    Total Amount - Rs:{cartItemValue}.00
                  </h1>
                </div>
                <div>
                  <PaymentOption />
                </div>
              </div>
            </div>
          ) : (
            <p className="fw-bold text-center fs-1">
              No Added Cart Item available
            </p>
          )}
        </>
      )}
    </>
  );
};
