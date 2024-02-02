import React from "react";
import './loading.css'

export const Loading = () => {
  return (
    <>
      <div id="loadingContainer" className="loading-container">
        <div className="spinner-border" role="status"></div>
      </div>
    </>
  );
};
