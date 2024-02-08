import React, { useState } from "react";
import { Loading } from "../../common/loading/Loading.tsx";
import { getcartItemsSessionData } from "../../../utils/cart-item-utils.ts";
import { PaymentOption } from "../../common/payment-option/PaymentOption.tsx";
import { AddedCartItem } from "../../common/added-cart-item/AddedCartItem.tsx";

export const CartItemPage = () => {
  const [loading, setLoading] = useState(false);
  const { cartItems } = getcartItemsSessionData();

  return (
    <>
      {loading ? (
        <Loading />
      ) : (
        <>
          {cartItems.length > 0 ? (
            <div className="d-flex flex-column flex-md-row container-fluid">
              <div className="col-md-8 col-12">

                <div>
                    <div>
                      {cartItems.map((data) => (
                        <AddedCartItem data={data}/>
                      ))}
                    </div>
                </div>
              </div>

              <div className="d-flex flex-column justify-content-center col-md-4 col-12">
                <div>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Tempora laudantium quibusdam soluta temporibus culpa numquam
                  neque adipisci asperiores nisi itaque quam accusantium at,
                  atque sapiente officiis ipsa vitae natus ad a debitis? Nisi
                  tempore, fugit dolorum consectetur aut natus fuga ab.
                  Perferendis aliquid quaerat doloribus delectus inventore eum
                  vel, accusantium placeat obcaecati harum sapiente non, aperiam
                  laudantium ab enim nihil? Sit, exercitationem necessitatibus?
                  Illo exercitationem eligendi quia ullam dolores nemo facilis
                  aliquid porro assumenda non totam, laborum libero ducimus
                  omnis sequi eos, voluptate ex! Fugiat repellat cum, a
                  laboriosam ex quae. Tempore nisi, temporibus excepturi enim
                  consequuntur distinctio repellat nesciunt?
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
