import React from "react";
import { DashCircle, PlusCircle } from "react-bootstrap-icons";

const QtyItem = ({ quantity, onIncrease, onDecrease }) => {

  return (
    <div className="qty-container">
      <button className="btn btn-sm btn-primary" onClick={onDecrease}>
        <span className="fw-bolder">
          <DashCircle />
        </span>
      </button>
      <span className="px-3">{quantity}</span>
      <button className="btn btn-sm btn-primary" onClick={onIncrease}>
        <span className="fw-bolder">
          <PlusCircle />
        </span>
      </button>
    </div>
  );
};

export default QtyItem;
