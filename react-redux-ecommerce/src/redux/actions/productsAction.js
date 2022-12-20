import { ActionTypes } from "../constants/action-types";

export const setProducts = (products) => {
  return {
    //return the object and object will taken by reducer
    type: ActionTypes.SET_PRODUCTS,
    //payloadproperty
    payload: products,
  };
};

export const selectedProduct = (product) => {
  return {
    type: ActionTypes.SELECTED_PRODUCT,
    //payloadproperty
    payload: product,
  };
};
export const removeSelectedProduct = () => {
  return {
    type: ActionTypes.REMOVE_SELECTED_PRODUCT,
  };
};