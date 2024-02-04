import React, { useState } from "react";
import { Button, Modal, Form } from "react-bootstrap";
import { CreditCard, Whatsapp } from "react-bootstrap-icons";
import { CustomerForm } from "../customer-form/CustomerForm.tsx";

export const PaymentOption = () => {
  const [isCustomerModelOpen, setIsCustomerModelOpen] = useState<boolean>(false);

  const openModal = () => {
    setIsCustomerModelOpen(true);
  };

  const closeModal = () => {
    setIsCustomerModelOpen(false);
  };

  return (
    <>
      <div className="d-flex justify-content-center flex-column w-75 mt-3">
        <Button
          className="px-3 mt-2 pe-auto btn btn-md border-0 buynow-btn fs-6"
          style={{ backgroundColor: "teal" }}
          onClick={openModal}
        >
          <span className="d-flex align-items-center justify-content-between text-light fw-bold">
            <span className="fs-5">Order Via Online</span>{" "}
            <CreditCard className="ms-3 fs-4" />
          </span>
        </Button>

        <Button
          className="mt-2 px-3 pe-auto btn btn-md border-0 buynow-btn fs-6"
          style={{ backgroundColor: "springgreen" }}
          onClick={openModal}
        >
          <span className="d-flex align-items-center justify-content-between text-dark fw-bold">
            <span className="fs-5">Order Via WhatsApp</span>{" "}
            <Whatsapp className="ms-3 fs-4" />
          </span>
        </Button>
      </div>
    </>
  );
};
