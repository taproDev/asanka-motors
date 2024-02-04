import React, { useState } from "react";
import { Button, Modal, Form } from "react-bootstrap";

export const CustomerForm = ({ isCustomerModelOpen, closeModal }) => {
  const [customerName, setCustomerName] = useState<string>("");
  const [mobileNumber, setMobileNumber] = useState<string>("");
  const [address, setAddress] = useState<string>("");

  const handleFormSubmit = (event) => {
    event.preventDefault();
    console.log("Customer Name:", customerName);
    console.log("Mobile Number:", mobileNumber);
    console.log("Address:", address);
    closeModal(); 
  };

  function generateOrderId() {
    const currentDate = new Date();
    const year = currentDate.getFullYear();
    const month = String(currentDate.getMonth() + 1).padStart(2, '0');
    const day = String(currentDate.getDate()).padStart(2, '0');
    const randomNum = Math.floor(1000 + Math.random() * 9000);
    const orderId = `${year}${month}${day}#${randomNum}`;
    return orderId;
  }

  return (
    <Modal show={isCustomerModelOpen} onHide={closeModal}>
      <Modal.Header closeButton>
        <Modal.Title>Enter Your Information for place order</Modal.Title>
      </Modal.Header>
      <Modal.Body>
        <div className="mb-3 d-flex flex-column">
          <span className="fw-bold">OrderId = {generateOrderId()} </span>
          <span className="fw-bold">Total Amount = Rs:{} </span>
        </div>
        <Form onSubmit={handleFormSubmit}>
          <Form.Group controlId="formCustomerName">
            <Form.Label>
              Customer Name<span className="text-danger">*</span>
            </Form.Label>
            <Form.Control
              type="text"
              placeholder="Enter customer name"
              value={customerName}
              className="border border-1"
              onChange={(e) => setCustomerName(e.target.value)}
              required
            />
          </Form.Group>

          <Form.Group controlId="formMobileNumber">
            <Form.Label>
              Mobile <span className="text-danger">*</span>
            </Form.Label>
            <Form.Control
              type="tel"
              placeholder="Enter mobile number"
              value={mobileNumber}
              className="border border-1"
              onChange={(e) => setMobileNumber(e.target.value)}
              required
            />
          </Form.Group>

          <Form.Group controlId="formAddress">
            <Form.Label>
              Address <span className="text-danger">*</span>
            </Form.Label>
            <Form.Control
              as="textarea"
              rows={3}
              placeholder="Enter address"
              value={address}
              className="border border-1"
              onChange={(e) => setAddress(e.target.value)}
              required
            />
          </Form.Group>

          <Button variant="primary" type="submit">
            Submit
          </Button>
        </Form>
      </Modal.Body>
    </Modal>
  );
};
